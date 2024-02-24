<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showFormularioFuncionario(Request $request){
        return view('cadastroFuncionario');
    }

    public function cadFuncionario(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'funcao' => 'string|required'
        ]);

        Funcionario::create($dadosValidos);

        return view('home');
    }

}
