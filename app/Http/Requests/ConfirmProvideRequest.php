<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmProvideRequest extends FormRequest
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
            'id' => 'integer',
            'department_id' => 'required|integer|exists:departments,id',
            'user_id' => 'required|integer|exists:users,id',
            'device_id' => 'required',
            'user_confirm' => 'integer||exists:users,id'
        ];
    }
}
