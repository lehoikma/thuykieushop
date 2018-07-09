<?php

namespace App\Http\Requests;

class ContactRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "address" => "required",
            "email" => "required|email",
            "tel" => "required",
            "comments" => "required",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'address.required'  => 'Vui lòng nhập địa chỉ',
            'email.required'  => 'Vui lòng nhập email',
            'tel.required'  => 'Vui lòng nhập số điện thoại',
            'comments.required'  => 'Vui lòng nhập comment',
            'email.email'  => 'Vui lòng nhập đúng định dạng email',
        ];
    }
}
