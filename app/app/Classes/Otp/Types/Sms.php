<?php

namespace App\Classes\Otp\Types;

use App\Classes\Otp\Contracts\OtpInterface;

class Sms implements OtpInterface
{


    public function send( string $receptor )
    {
        dd('send sms');
        // TODO: Implement send() method.
    }
}
