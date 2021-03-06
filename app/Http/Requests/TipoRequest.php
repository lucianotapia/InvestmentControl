<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TipoRequest extends FormRequest
{

    protected $primaryKey = 'idTipo';
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
            'descricao' => 'required',
            'sigla' => 'required|unique:tipos,sigla,' . $this->tipo .',idTipo'
        ];
        
        return $rules;
    }

    public function messages()
    {
        return [
            'descricao.required' => 'A descrição não pode ficar em branco',
            'sigla.required' => 'A sigla não pode ficar em branco e deve ser única',
            'sigla.unique' => 'Esta sigla já existe no cadastro',
        ];
    }
}
