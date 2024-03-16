<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    public function showHome(){
        return view('home');
    }


    public function showFormularioQuarto(Request $request){
        return view('escolherQuarto');
    }

    public function cadQuarto(Request $request){
        $dadosValidos = $request->validate([
            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'numeric|required'
        ]);

        Quarto::create($dadosValidos);

        return view('home');
    }

    public function gerenciarQuarto(Request $request){
        return view('gerenciarQuarto');
    }
}
