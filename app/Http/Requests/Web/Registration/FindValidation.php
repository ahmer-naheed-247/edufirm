<?php

 /*
 * Mr. Umesh Kumar Yadav
 * Business With Technology Pvt. Ltd.
 * Rajbiraj-7 (Province 2, Saptari), Nepal
 * +977-9868156047
 * freelancerumeshnepal@gmail.com
 * https://codecanyon.net/item/unlimited-edu-firm-school-college-information-management-system/21850988
 */
namespace App\Http\Requests\Web\Registration;

use Illuminate\Foundation\Http\FormRequest;

class FindValidation extends FormRequest
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
            'web_registration_programmes_id'    => 'required',
            'reg_no'                      => 'required',
            'date_of_birth'                 => 'required',
            'name'                          => 'required',

        ];
    }

    public function messages()
    {
        return [
                'web_registration_programmes_id.required'  =>    'Programme Applied For Required.'
        ];
    }
}