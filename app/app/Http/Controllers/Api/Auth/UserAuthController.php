<?php

namespace App\Http\Controllers\Api\Auth;

use App\Classes\Otp\OtpFactory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\User\StepOneLoginRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class UserAuthController extends Controller
{


    /**
     * @param StepOneLoginRequest $request
     * @return mixed
     */
    public function stepOne( StepOneLoginRequest $request) : mixed
    {
        //todo save or update user


        //generate random code
        $code = Str::random(6);

        //save code to cache for 2 min
        Cache::put($request->value,
                   ['type' => $request->type, 'code' => $code],
                   Carbon::now()->addMinutes(2));


        (new OtpFactory())->generate($request->type)->send($request->value, $code);

        return 'success';
    }



    public function login( Request $request)
    {
        //todo get code from request
        $code = Cache::get($request->value);
        if (!$code) {
            return 'code not valid';
        }

        //todo get user buy



    }

}
