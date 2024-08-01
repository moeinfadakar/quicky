<?php

namespace App\Http\Requests;

use App\Models\city;
use Illuminate\Foundation\Http\FormRequest;

class signUpUsers extends FormRequest
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
    public function getUpUser(): array
    {
        return [
            //

            'fullname' => 'required | min:8 |max:12' ,
            'username' => 'required |min:8|max:15' ,
            'email' => 'required |min:8|unique:drivers' ,
            'nationalid' => 'required|min:8|max:15|unique:drivers' ,
            'city_id' => 'required ' ,
            'age' => 'required |digits_between:12,92' ,
            'number' => 'required|min:11|max:11|unique:drivers' ,
            'password' => 'required|min:10 |unique:drivers' ,
            're-enter-password' => 'same:password|min:10' ,
        ];
 
    }


///////////////////

    protected function prepareForValidation()  // getting cities list
    {       





    }  
    public function getCities()  
    {       

     return $this->city  ;
    }  


///////////////////
}

