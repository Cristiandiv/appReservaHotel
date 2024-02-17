<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showFormularioFuncionario(Request $request){
        return view('cadastroFuncionario');
    }
}
