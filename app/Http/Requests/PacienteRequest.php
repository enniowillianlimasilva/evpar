<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'cpf' => 'required|cpf',
            'nome' => 'required',
            'rg' => 'required',
            'cartao_sus' => 'required',
            'sexo' => 'required',
            'data_nascimento' => 'required',
            'nome_mae' => 'required',
            'telefone' => 'required',
            'status' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'quadra' => 'required',
            'lote' => 'required',
            'complemento' => 'required',
            'bairro' => 'required',
            'cidade_id' => 'required',
            'estado_id' => 'required',
        ];
        
    }
}
