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
            'city'                 => 'required',
            'showroom'                 => 'required',
            'customer_name'                 => 'required',
            'customer_phone'                => 'required',
            'customer_address'              => 'required',
            'customer_email'              => 'required',
            'date'              => 'required',
        ];
    }
     /**
     * @return array
     */
    public function messages()
    {
        return [
            'city.required'    => "Vui lòng chọn tỉnh thành",
            'showroom.required'   => "Vui lòng chọn showroom",
            'customer_name.required' => "Vui lòng nhập họ và tên",
            'customer_phone.required' => "Vui lòng nhập số điện thoại",
            'customer_address'      => "Vui lòng nhập địa chỉ",
            'customer_mail'      => "Vui lòng nhập email",
            'date'      => "Vui lòng chọn thời gian"
        ];
    }
}
