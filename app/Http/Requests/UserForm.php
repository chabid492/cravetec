<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'email' => 'required',
            'mobile' => 'required|max:11|min:11',
            'age' => 'required|min:0',
            'address' => 'required|max:255',
            
        ];

        

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        

        return [
            'name.required' => 'Please fill name field',

            'email.required' => 'Email is required field',
            'mobile.required' => 'Mobile field is required',
            'age.required' => 'Please enter your age',
            'address.required' => 'Fill address field it is required',
        
        ];

    }

}
