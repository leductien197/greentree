<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTreeRequest extends FormRequest
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
      
            'name' => 'required'
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Tên cây không được để trống'
        ];
    }
    function delTree($id)
    {
        $tree = tree::find($id);
        $tree->delete();
        return back()->with('thongbao', 'Đã xóa thành công');
    }
}
