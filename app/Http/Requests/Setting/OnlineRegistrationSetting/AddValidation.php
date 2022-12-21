<?php

namespace App\Http\Requests\Setting\OnlineRegistrationSetting;


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
            'title'                    => 'required | max:100',
        ];
    }


    public function messages()
    {
        return [

        ];
    }
}