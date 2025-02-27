<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signInUsers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function SignInUser(): array
    {
        return [
            //

            "NNE" => 'required |unique:driver' ,
            'password' => 'required | min:8',
        ];
    }
}
