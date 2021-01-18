<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaRequest extends FormRequest
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
        $rules = [
            'corretora' => 'required',
            'conta' => 'required|unique:contas,conta,' . $this->idconta .',idConta'
            
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'corretora.required' => 'A descrição da corretora não pode ficar em branco',
            'conta.required' => 'O número da conta não pode ficar em branco e deve ser única',
            'conta.unique' => 'Esta Conta já existe no cadastro',
        ];
    }
}
