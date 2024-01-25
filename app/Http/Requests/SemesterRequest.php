<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SemesterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'semester_type' => 'required|in:SUMMER,WINTER',
            'year' => 'required|integer',
        ];
    }
}
