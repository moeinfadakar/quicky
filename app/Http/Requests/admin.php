<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class admin extends FormRequest
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
    public function adminLoginGet(): array
    {
        return [
            //
             
              
                'national_id' => 'required |min:8|max:15|unique:admin',
               'password' => 'required |min:8|max:20' ,


        ];
    }
}
