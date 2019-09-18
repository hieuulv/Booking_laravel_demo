<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required|max:400'
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Vui lòng điền họ tên.',
            'email.required' => 'Vui lòng điền địa chỉ Email.',
            'email.email' => 'Vui lòng điền đúng định dạng đỉa chỉ Email.',
            'content.required' => 'Vui lòng không để trống nội dung.',
            'content.max' => 'Nội dung không quá 400 từ.',
        ];
    }
}
