<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'CNPJ' => 'required|string|min:14|max:14',
            'razao_social' => 'required|string',
            'nome_fantasia' => 'string',
            'CEP' => 'required|max:8',
            'logradouro' => 'required|string',
            'numero' => 'required|string',
            'telefone' => 'required|string|min:10|max:11',
            'email' => 'required|email',
            'complemento' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string|max:2',
            'segmento' => 'required|string',
            'inscricao_municipal' => 'required|string',
            'inscricao_estadual' => '|string',
        ];
    }
}
