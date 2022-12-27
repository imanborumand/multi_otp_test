<?php

namespace App\Classes\Otp\Types;

use App\Classes\Otp\Contracts\OtpInterface;


class Email implements OtpInterface
{

    public function send( string $receptor, string $code )
    {
        dd('send email');
        // TODO: Implement send() method.
    }
}
