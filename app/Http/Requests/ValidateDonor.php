<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateDonor extends FormRequest
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
            "phone" => ["required", "max: 20"],
            "email" => ["required", "email"],
            "Weight" => ["required"],
            "height" => ["required"],
            "smoker" => ["required"],
            "disease" => ["required"],
            "note" => ["required"],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório.",
            "phone.required" => "O número de telefone é obrigatório.",
            "email.required" => "O e-mail é obrigatório.",
            "Weight.required" => "O campo peso é obrigatório.",
            "height.required" => "O campo altura é obrigatório.",
            "smoker.required" => "Seleção do campo fumanate é obrigatório.",
            "disease.required" => "Seleção do campo doença é obrigatório.",
            "note.required" => "O campo observação é obrigatório.",
        ];
    }
}
