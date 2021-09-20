<?php

return [
    [
        'name' => 'Contact buy cars',
        'flag' => 'contact-buy-car.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'contact-buy-car.create',
        'parent_flag' => 'contact-buy-car.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'contact-buy-car.edit',
        'parent_flag' => 'contact-buy-car.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'contact-buy-car.destroy',
        'parent_flag' => 'contact-buy-car.index',
    ],
];
