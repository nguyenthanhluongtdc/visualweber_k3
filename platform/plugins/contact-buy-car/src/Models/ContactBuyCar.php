<?php

namespace Platform\ContactBuyCar\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;

class ContactBuyCar extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_contact_buy_cars';

    /**
     * @var array
     */
    protected $fillable = [
        'status',
        'fullname',
        'total_price',
        'showroom',
        'buy_date',
        'phone',
        'email',
        'address',
        'province',
        'disctrict',
        'ward',
        'status',
        'car_type',
        'car_color'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
