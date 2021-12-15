<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTreinee extends FormRequest
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
            "name" => "required|min:3|max:50",
            "school_education" => ["required", "min: 3" , "max: 50"],
            "phone" => ["required", "max: 20"],
            "email" => ["required", "email"],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório.",
            "school_education.required" => "O campo educação escolar é obrigatório.",
            "phone.required" => "O número de telefone é obrigatório.",
            "email.required" => "O e-mail é obrigatório."
        ];
    }
}
