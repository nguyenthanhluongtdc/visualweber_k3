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
            'city'              => 'required',
            'showroom'              => 'required',
            'district'              => 'required',
            'ward'              => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'    => "Vui lòng nhập họ và tên",
            'phone.required'   => "Vui lòng nhập số điện thoại",
            'address.required'      => "Vui lòng nhập địa chỉ",
            'city.required'      => "Vui lòng chọn Tỉnh/Thành phố",
            'showroom.required'      => "Vui lòng chọn Showroom",
            'district.required'      => "Vui lòng chọn Quận huyện",
            'ward.required'      => "Vui lòng chọn Xã/Phường/Thị trấn"
            
        ];
    }
}
