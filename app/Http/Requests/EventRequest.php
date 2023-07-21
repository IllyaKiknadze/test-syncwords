<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'string|min:1|max:200|required',
            'start_date'=>'date_format:Y-m-d H:i:s|date|after:now|required',
            'end_date'=>'date_format:Y-m-d H:i:s|date|after:now|required'
        ];
    }
}
