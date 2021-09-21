<?php

namespace Platform\ContactBuyCar\Http\Requests;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class ContactBuyCarRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'province'                 => 'required',
            'showroom'                 => 'required',
            'fullname'                 => 'required',
            'phone' => [
                'required',
                'regex:/(09|08|07|05|03)+([0-9]{8})\b/',
                'size:10',
            ],
            'address'              => 'required',
            'email'              => 'required',
            'buy_date'              => 'required',
            'city'              => 'required',
        ];
    }
     /**
     * @return array
     */
    public function messages()
    {
        return [
            'province.required'    => "Vui lòng chọn tỉnh thành",
            'city.required'    => "Vui lòng chọn tỉnh thành",
            'showroom.required'   => "Vui lòng chọn showroom",
            'fullname.required' => "Vui lòng nhập họ và tên",
            'phone.required' => 'Vui lòng nhập Số điện thoại',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'phone.size' => 'Số điện thoại phải đúng 10 chữ số',
            'address.required'      => "Vui lòng nhập địa chỉ",
            'email.required'      => "Vui lòng nhập email",
            'buy_date.required'      => "Vui lòng chọn thời gian"
        ];
    }
}
