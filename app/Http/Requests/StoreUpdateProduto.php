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
            'nome' => [
                'required',
                'min:3',
                'max:255'
            ],

            'descricao' => [
                'required',
                'min:3',
                'max:10000'
            ],

            'arquivo' =>[ 
                'required',
                'image'
            ],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome obrigatório',
            'nome.min' => 'Nome deve ter no mínimo 3 caracteres',
            'descricao.min' => 'Descrição deve ter 3 ou mais caracteres',
            'arquivo.required' => 'Foto é obrigatória',
        ];
    }
}
