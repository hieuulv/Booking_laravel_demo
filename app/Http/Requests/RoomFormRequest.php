<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomFormRequest extends FormRequest
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
            'name' => 'required|unique:rooms|min:3',
            'title' => 'required',
            'rooms_detail' => 'required',
            'price' => 'required|numeric',
            'address' => 'required',
            'bed_type' => 'required',
            'copacity_room' => 'required',
            'facilities_room' => 'required',
            'images' => 'required|image|mimes:jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên danh mục bắt buộc nhập.',
            'name.min' => 'Tên danh mục không nhỏ hơn 3 ký tự.',
            'name.unique' => 'Tên danh mục đã được tạo từ trước.',
            'title.required' => 'Vui lòng nhập vào Form.',
            'rooms_detail.required' => 'Vui lòng nhập vào Form.',
            'price.required' => 'Vui lòng nhập vào Form.',
            'price.numeric' => 'Vui lòng nhập đúng định dạng số.',
            'address.required' => 'Vui lòng nhập vào Form.',
            'bed_type.required' => 'Vui lòng nhập vào Form.',
            'copacity_room.required' => 'Vui lòng nhập vào Form.',
            'facilities_room.required' => 'Vui lòng nhập vào Form.',
            'images.required' => 'Vui lòng nhập vào Form.',
            'images.image' => 'Vui lòng chọn File ảnh.',
            'images.mimes' => 'Vui lòng chọn đúng định dạng ảnh: jpg, png.',
        ];
    }
}
