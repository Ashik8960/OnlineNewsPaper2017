<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'first_name'=>'required|alpha|min:3|max:10',
            'last_name'=>'nullable|alpha|min:3|max:10',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:4|max:20',
            'retype_password'=>'required|same:password',
            'mobile_no'=>'required|numeric|regex:/^01[0-9]/',
            'image'=>'required|mimes:jpeg,jpg,png',
        ];
    }
}
