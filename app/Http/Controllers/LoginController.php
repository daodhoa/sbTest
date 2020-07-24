<?php

namespace App\Http\Controllers;

use App\Services\MailService;
use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $authService;
    private $mailService;

    public function __construct(AuthService $authService, MailService $mailService)
    {
        $this->authService = $authService;
        $this->mailService = $mailService;
    }

    public function index()
    {
        return view('login');
    }

    public function attemptLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string'
        ]);
        $data = $request->only('username');
        $username = $data['username'];
        $attemptUser = $this->authService->attemptLogin($username);
        if (!$attemptUser) {
            return redirect()->back()->with('loginError', 'User not found');
        }
        $request->session()->put('attemptUser', $attemptUser);

        $token = $this->generateToken();
        $this->authService->saveToken($attemptUser, $token);
        $this->mailService->sendOTPLogin($attemptUser->email, $token);

        return redirect()->back()->with('otp', true);
    }

    private function generateToken()
    {
        return rand(100000, 999999);
    }

    public function verifyLogin(Request $request)
    {
        $request->validate([
            'token' => 'required|numeric|min:100000|max:999999'
        ]);

        $token = $request->only('token')['token'];
        $attemptUser = $request->session()->get('attemptUser');
        $checkTokenValid = $this->authService->checkTokenValid($attemptUser, $token);
        $request->session()->forget('attemptUser');

        if ($checkTokenValid['status']) {
            return redirect()->route('welcome');
        }
        return redirect()->route('login.index')->with('loginError', $checkTokenValid['message']);
    }
}
