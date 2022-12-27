<?php

namespace App\Classes\Otp\Contracts;

interface OtpInterface
{

    /**
     * receptor maybe be a mobile number or email or firebase token!
     * @param string $receptor
     * @return mixed
     */
    public function send( string $receptor);

}
