<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduto extends FormRequest
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
            'nome_produto' => [
                'required',
                'min:3',
                'max:255'
            ],

            'descricao_produto' => [
                'required',
                'min:3',
                'max:10000'
            ],

            'codigo_produto' => [
                'required',
                'min:3',
                'max:255'
            ],

            'arquivo' =>[ 
                'nullabel',
                'image'
            ],
        ];
    }

    public function messages()
    {
        return [
            'nome_produto.required' => 'Nome obrigatório',
            'nome_produto.min' => 'Nome deve ter no mínimo 3 caracteres',
            'descricao_produto' => 'Descrição deve ter 3 ou mais caracteres',
            'codigo_produto.required' => 'Código do produto obrigatório',
            
        ];
    }
}
