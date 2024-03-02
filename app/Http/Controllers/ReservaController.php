<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function showFormularioReserva(Request $request){
        return view('fazerReserva');
    }

    public function cadReserva(Request $request){
        $dadosValidos = $request->validate([
            'idcliente' => 'string|required',
            'idfuncionario' => 'string|required',
            'idquarto' => 'string|required',
            'situacao'=> 'string|required',
            'dataEntrada'=> 'string|required',
            'dataSaida'=> 'string|required'
        ]);

        Reserva::create($dadosValidos);

        return Redirect::route('home');
    }
}

