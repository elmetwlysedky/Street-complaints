<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Social_contactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'facebook' => 'required|string',
            'twitter'=> 'required|string',
            'instagram'=> 'required|string',
            'snap'=> 'required|string',
            'whatsapp'=> 'required|string',
            'phone'=>'required',
        ];
    }
}
