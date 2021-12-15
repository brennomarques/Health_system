<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateDonations extends FormRequest
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
            'name' => ['required', "min: 3"],
            'phoneNumber' => ['required', "min: 3"],
            'email'  => ['required', "min: 3"],
            'liters'  => ['required']
        ];
    }

    public function messages(){
        return [
            'name.required' => "O campo nome é obrigatório",
            'phoneNumber.required' => "O Campo número de telefone é obrigatório",
            'email.required' => "O Campo e-mail é obrigatório",
            'liters.required' => "O Campo quantidade de litros é obrigatório",
        ];
    }
}
