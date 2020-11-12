<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'date_from' => 'date',
            'date_to' => 'date',
        ];
    }
}
