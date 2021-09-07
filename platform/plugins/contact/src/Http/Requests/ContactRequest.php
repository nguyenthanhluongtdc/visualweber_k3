<?php

namespace Platform\Contact\Http\Requests;

use Platform\Support\Http\Requests\Request;

class ContactRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function rules()
    {
        if (setting('enable_captcha') && is_plugin_active('captcha')) {
            return [
                'name'                 => 'required',
                'phone'                => 'required',
                'address'              => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ];
        }
        return [
            'name'                 => 'required',
            'phone'                => 'required',
            'address'              => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'    => "Vui lòng nhập họ và tên",
            'phone.required'   => "Vui lòng nhập số điện thoại",
            'address.required'      => "Vui lòng nhập địa chỉ"
        ];
    }
}
