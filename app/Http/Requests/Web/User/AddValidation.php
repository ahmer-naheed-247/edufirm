<?php

namespace App\Http\Requests\Web\User;

use Illuminate\Foundation\Http\FormRequest;

class AddValidation extends FormRequest
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
            'name'              => 'required',
            'email'             => 'required | unique:users,email',
            'password'          => 'required',
            'main_image'     => 'mimes:jpeg,jpg,bmp,png,gif',
            'contact_number'    => 'required',
            'address'           => 'required',
            'role'         => 'required',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
/*'name', 'email', 'password', 'profile_image', 'contact_number', 'address','user_type',*/