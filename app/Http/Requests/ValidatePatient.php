<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePatient extends FormRequest
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
            "last_name" => ["required", "min: 3" , "max: 50"],
            "age" => ["required", "max: 200"],
            "address" => ["required", "min: 5" , "max: 200"],
            "phone" => ["required", "max: 20"],
            "email" => ["required", "email"],
            "is_donor" => ["required", "max: 10"],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório.",
            "last_name.required" => "O campo sobre nome é obrigatório.",
            "age.required" => "O campo idade é obrigatório.",
            "address.required" => "O campo endereço é  obrigatório.",
            "phone.required" => "O número de telefone é obrigatório.",
            "email.required" => "O e-mail é obrigatório.",
            "is_donor.required" => "Opção de doador é obrigatório."
        ];
    }
}
