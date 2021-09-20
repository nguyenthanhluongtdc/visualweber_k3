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
            'phone'                => 'required',
            'address'              => 'required',
            'email'              => 'required',
            'buy_date'              => 'required',
        ];
    }
     /**
     * @return array
     */
    public function messages()
    {
        return [
            'province.required'    => "Vui lòng chọn tỉnh thành",
            'showroom.required'   => "Vui lòng chọn showroom",
            'fullname.required' => "Vui lòng nhập họ và tên",
            'phone.required' => "Vui lòng nhập số điện thoại",
            'address'      => "Vui lòng nhập địa chỉ",
            'mail'      => "Vui lòng nhập email",
            'buy_date'      => "Vui lòng chọn thời gian"
        ];
    }
}
