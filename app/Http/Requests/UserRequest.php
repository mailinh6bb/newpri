<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' =>'required',
            'email'=>'required|unique:users,email',
            'sex'=>'required',
            'password'=>'required',
            'rePassword' => 'required|same:password',
            'phone'=>'required|integer',
            'address'=>'required',
            'roleID'=>'required'
        ];
    }
    public function messages(){
        return[
            'name.required'=>'**Vui lòng nhập Họ tên',
            'email.required'=>'**Vui lòng nhập Email',
            'email.unique'=>'**Email đã tồn tại',
            'sex.required'=>'**Vui lòng nhập Họ tên',
            'password.required'=>'**Vui lòng nhập mật khẩu',
            'address.required'=>'**Vui lòng nhập địa chỉ',
            'rePassword.required' => '**Vui lòng nhập lại mật khẩu',
            'rePassword.same' => '** Mật khẩu không khớp',
            'phone.required'=>'**Vui lòng nhập Số điên thoại',
            'phone.integer'=>'**Không lấy số không ở đầu vì đẵ mặt định',
            'roleID.required'=>'**Vui lòng chọn quyền'
        ];

    }
}
