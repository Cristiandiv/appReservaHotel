<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    public function showFormularioQuarto(Request $request){
        return view('escolherQuarto');
    }

    public function cadQuarto(Request $request){
        $dadosValidos = $request->validate([
            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'decimal:8,2|required'
        ]);

        Quarto::create($dadosValidos);

        return Redirect::route('home');
    }
}
