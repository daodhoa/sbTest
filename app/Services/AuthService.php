<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Otp;
use App\User;

class AuthService
{
    private $user;
    private $otp;

    public function __construct(User $user, Otp $otp)
    {
        $this->user = $user;
        $this->otp = $otp;
    }

    public function attemptLogin($username)
    {
        return $this->user->where('username', $username)->first();
    }

    public function saveToken($user, $token)
    {
        if ($user->otp) {
            $user->otp->update([
                'token' => $token
            ]);
        } else {
            $this->otp->user_id = $user->id;
            $this->otp->token = $token;
            $this->otp->save();
        }
    }

    public function checkTokenValid($user, $token)
    {
        $now = Carbon::now();
        if ($user->otp->token != $token) {
            return [
                'status' => false,
                'message' => 'Invalid Token'
            ];
        } elseif ($now->diffInSeconds($user->otp->updated_at) > 60) {
            return [
                'status' => false,
                'message' => 'Token Expired'
            ];
        } else {
            Auth::login($user);
            return [
                'status' => true,
                'message' => 'OK'
            ];
        }
    }
}
