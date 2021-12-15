<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateDoctor extends FormRequest
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
            "specialist" => ["required", "min: 3" , "max: 50"],
            "age" => ["required", "max: 200"],
            "phone" => ["required", "max: 20"],
            "email" => ["required", "email"],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório.",
            "specialist.required" => "O campo especialidade é obrigatório.",
            "age.required" => "O campo idade é obrigatório.",
            "phone.required" => "O número de telefone é obrigatório.",
            "email.required" => "O e-mail é obrigatório."
        ];
    }
}
