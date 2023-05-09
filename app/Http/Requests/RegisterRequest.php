<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'required|max:255',
            'email'=>'required|max:255|',
            'address'=>'required|max:255|',
            'phone_number'=>'required|max:255|',
            'password'=>'required|min:10|',
            'password_confirmation'=>'required|same:password'
        ];
    }
}
