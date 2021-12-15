<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateBloodBank extends FormRequest
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
            'type' => ['required'],
            'compatibility' => ['required']
        ];
    }

    public function messages(){
        return [
            'type.required' => "O campo tipo é obrigatório",
            'compatibility.required' => "O campo compatibilidade é obrigatório"
        ];
    }
}
