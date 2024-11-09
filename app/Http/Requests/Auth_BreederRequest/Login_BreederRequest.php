<?php

namespace App\Http\Requests\Auth_BreederRequest;

use Illuminate\Foundation\Http\FormRequest;

class Login_BreederRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'phone_number'=>'required|string',
            'password'=>'required|string|min:6|max:8'
        ];
    }
}
