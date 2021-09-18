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
                'address'              => 'required',
                'g-recaptcha-response' => 'required|captcha',
                'phone' => [
                    'required',
                    'regex:/(09|08|07|05|03)+([0-9]{8})\b/',
                    'size:10',
                ],
            ];
        }
        return [
            'name'                 => 'required',
            'address'              => 'required',
            'city'              => 'required',
            'showroom'              => 'required',
            'district'              => 'required',
            'ward'              => 'required',
            'phone' => [
                'required',
                'regex:/(09|08|07|05|03)+([0-9]{8})\b/',
                'size:10',
            ],
        ];
    }

    
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'phone.required' => 'Vui lòng nhập Số điện thoại',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'phone.size' => 'Số điện thoại phải đúng 10 chữ số',
            'name.required'    => "Vui lòng nhập họ và tên",
            'address.required'      => "Vui lòng nhập địa chỉ",
            'city.required'      => "Vui lòng chọn Tỉnh/Thành phố",
            'showroom.required'      => "Vui lòng chọn Showroom",
            'district.required'      => "Vui lòng chọn Quận huyện",
            'ward.required'      => "Vui lòng chọn Xã/Phường/Thị trấn"
            
        ];
    }
}
