<?php

namespace App\Services;

use App\Mail\SendOTPLogin;
use Illuminate\Support\Facades\Mail;

class MailService
{
    public function sendOTPLogin($to, $token)
    {
        Mail::to($to)->send(new SendOTPLogin($token));
    }
}
