<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeightFormRequest extends FormRequest
{

    public function rules()
    {
        return [
            'weight' => 'required|numeric|min:1|max:300'
        ];
    }
}
