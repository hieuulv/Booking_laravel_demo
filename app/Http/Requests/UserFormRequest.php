<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            //
            'name' => 'required|min:3',
            'birthday' => 'required|date',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|unique:users',
            'address' => 'required|max:255',
            'images' => 'required|image|mimes:jpg,png',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Vui lòng nhập dữ liệu vào From.',
            'name.min' => 'Tên không nhỏ hơn 3 ký tự.',
            'birthday.required' => 'Vui lòng nhập dữ liệu vào From.',
            'phone.required' => 'Vui lòng nhập dữ liệu vào From.',
            'phone.regex' => 'Định dạng số điện thoại không hợp lệ.',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 ký tự.',
            'email.required' => 'Vui lòng nhập dữ liệu vào From.',
            'email.email' => 'Địa chỉ Email không hợp lệ.',
            'email.unique' => 'Địa chỉ Email đã tồn tại.',
            'address.required' => 'Vui lòng nhập dữ liệu vào From.',
            'password.required' => 'Vui lòng nhập dữ liệu vào From.',
            'password_confirm.required' => 'Vui lòng nhập dữ liệu vào From.',
            'password_confirm.same' => 'Vui lòng nhập dữ liệu vào From.',
        ];
    }
}
