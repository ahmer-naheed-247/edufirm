<?php

 /*
 * Mr. Umesh Kumar Yadav
 * Business With Technology Pvt. Ltd.
 * Rajbiraj-7 (Province 2, Saptari), Nepal
 * +977-9868156047
 * freelancerumeshnepal@gmail.com
 * https://codecanyon.net/item/unlimited-edu-firm-school-college-information-management-system/21850988
 */
namespace App\Http\Requests\Transport\Vehicle;

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
            'number' => 'required | max:25 | unique:vehicles,number',
            'type' => 'required | max:25',
            'model' => 'required | max:25'
        ];
    }

    /*public function messages()
    {
        return [
            'number.required' => 'Please, Add Vehicles Number.',
            'number.unique' => 'This Vehicle Already Register',
        ];
    }*/
}
