<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Aporte;

class AporteRequest extends FormRequest
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
        //'carteira_id' => ['required', Rule::in(Aporte::carteiras())],
        //'conta' => ['required', Rule::in(Aporte::contas())],

        $rules = [            
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
