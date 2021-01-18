<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Operacao;

class OperacaoRequest extends FormRequest
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
            'operacao' => ['required', Rule::in(Operacao::operacao_tipo())],
            'data' => 'required|date_format:d/m/Y',
            'valor' => 'required|numeric'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'data.required'    => 'A data não pode ficar em branco.',
            'data.numeric'    => 'O valor deve ser numérico.',
        ];
    }
}
