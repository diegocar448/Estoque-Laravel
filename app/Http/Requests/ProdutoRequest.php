<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdutoRequest extends Request
{
    //aqui ele vai dizer se eu pode ou não validar essa autorização
    public function authorize()
    {

        return true;
    }

    //aqui eu isolo todas as minha regras de validação
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric',
            'tamanho' => 'required|max:100'
        ];
    }

    //aqui vamos customizar as nossas mensagens
    public function messages()
    {
        return[
        //aqui vai o input + regra de validação
        //ex: nome.validação obrigatoria
            'required' => 'O :attribute é obrigatório!',
            'numeric' => 'O :attribute precisa ser um valor numérico!',

        ];
    }
}
