<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewRequest extends FormRequest
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
            'name'=>'required',
            'symptom'=>'required',
            'content'=>'required',
            'new_img'=>'image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên bệnh không được để trống',
            'sympton.required' => 'Triệu chứng không được để trống',
            'content.required'=>'Nội dung không được để trống',
            'new_img.image'=>'Ảnh phải đúng định dạng',
        ];
    }
}
