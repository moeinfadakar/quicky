<?php

namespace App\Http\Requests;

use App\Models\cars;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class signUpDriver extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rule(): array
    {
        return [
            //
            'fullname' => 'required | min:8 |max:12' ,
             'username' => 'required |min:8|max:15' ,
             'email' => 'required | unique:drivers' ,
             'nationalid' => 'required|min:8|max:15|unique:drivers' ,
             'city_id' => 'required ' ,
             'age' => 'required |digits_between:12,92' ,
             'number' => 'required|min:11|max:11|unique:drivers' ,
             'password' => 'required|min:8 |unique:drivers' ,
             're-enter-password' => 'same:password' ,
             'car-model-id' => 'required' ,
             'car-year' => 'required' ,
        ];
    }
    public function messages()  
    {  
        return [  

              'fullname.required' => 'واجب است' ,
              'fullname.min' => 'حداقل 8 تا' ,
              'fullname.max' => 'حداکثر 12 تا' ,

              'username.required' => 'واجب است' ,
              'username.min' => 'حداقل 8 تا' ,
              'username.max' => 'حداکثر 12 تا' ,

              'email.required' => 'واجب است' ,
              'email.min' => 'حداقل 8 تا' ,
          

        ];  
    }  


    public function getCars(){

           $allCars = cars::all();

           return  [

                  "allCars" => $allCars ,

           ];
    }
}
