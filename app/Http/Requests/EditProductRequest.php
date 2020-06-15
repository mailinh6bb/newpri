<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'pro_name' => 'required',
            'pro_cate_id' => 'required',
            'pro_type'=> 'required',
            'pro_price'=> 'required',
            'pro_image'=> 'required',
            'pro_content'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'pro_name.required'=>' Vui lòng nhập tên sản phẩm',
            'pro_cate_id.required' => 'Vui lòng nhập danh mục',
            'pro_type'=> ' Vui lòng chọn loại sản phẩm',
            'pro_price.required'=>'Vui lòng nhập giá sản phẩm',
            'pro_image.required'=>'Vui lòng chọn ảnh cho sản phẩm',
            'pro_content.required'=>'Vui lòng nhập mô tả về sản phẩm',
        ];
    }
}
