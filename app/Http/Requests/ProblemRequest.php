<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProblemRequest extends FormRequest
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
            'name' =>'required|string|max:225',
            'user_id' => 'required',
            'city_id' => 'required',
            'problem_destination_id' => 'required',
            'status' => 'required',
            'reason_id' => 'required',
            'tools' => 'sometimes',
            'causing' => 'sometimes',
            'description' => 'required',
        ];
    }
}
