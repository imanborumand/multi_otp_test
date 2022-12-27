<?php

namespace App\Http\Controllers\Api\Auth;

use App\Classes\Otp\OtpFactory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\User\StepOneLoginRequest;

class UserAuthController extends Controller
{


    /**
     * @param StepOneLoginRequest $request
     * @return mixed
     */
    public function stepOne( StepOneLoginRequest $request) : mixed
    {
        //todo save or update user
        //todo generate login code

        (new OtpFactory())->generate($request->type)->send($request->value);

        return 'success';
    }

}
