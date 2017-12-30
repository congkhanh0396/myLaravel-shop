<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'txtName'=> 'required|unique:products,name'
        ];
    }

    public function Message(){
        return [
           'txtName.required' => 'Không để trống dữ liệu',
           'txtName.unique' => 'Tên sản phẩm không được trùng'
        ];
    }
}
