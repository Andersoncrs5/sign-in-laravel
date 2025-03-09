<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        if (session('active') == true) {
            return redirect()->route('home');
        }
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'min:10', 'max:150'],
            'password' => ['required', 'string', 'min:8', 'max:50'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'The email field is required.',
            'email.string' => 'The email must be a valid string.',
            'email.email' => 'Please enter a valid email address.',
            'email.min' => 'The email must be at least 10 characters long.',
            'email.max' => 'The email must not exceed 150 characters.',
            
            'password.required' => 'The password field is required.',
            'password.string' => 'The password must be a valid string.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.max' => 'The password must not exceed 50 characters.',
        ];
    }
}
