<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPlandiseaseRequest extends FormRequest
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
            'plantdisease_code' => 'required',
            'plantdisease_name' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'plantdisease_code.required' => 'Tên bệnh không được để trống',
            'plantdisease_name.required' => 'Triệu chứng không được để trống',
        ];
    }
}
