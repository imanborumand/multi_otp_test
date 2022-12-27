<?php

namespace App\Http\Requests\Auth\User;

use App\Enums\LoginTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class StepOneLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type' => ['required', 'string', Rule::in(['sms', 'email'])], //move this to enum
            'value' => 'string|required', //add role validation for check mobile or email
        ];
    }
}
