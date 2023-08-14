<?php

namespace App\Http\Requests;

use App\Rules\OldPasswordRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdatePasswordRequest extends FormRequest
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
            'old_password' => ['required', new OldPasswordRule()],
            'password' => ['required', Password::min(8)],
            'password_confirm' => ['required',Password::min(8), 'same:password']
        ];
    }
}
