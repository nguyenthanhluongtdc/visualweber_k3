<?php

namespace Platform\ACL\Http\Requests;

use Platform\Support\Http\Requests\Request;
use RvMedia;

class AvatarRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'avatar_file' => RvMedia::imageValidationRule(),
            'avatar_data' => 'required',
        ];
    }
}
