<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubscribeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function subscribeRequest()
    {
        return [
            'name' => 'required',
            'email' => ['required'],
        ];
    }

    public function subscribeMessage()
    {
        return [
            'name.required' => 'The field is required',
            'mobile.required' => 'The field is required',
        ];
    }

}
