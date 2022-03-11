<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Canecas extends Controller
{
    public function cadastrar_canecas(Request $request){
        $canecaJava = new caneca();
        $canecaJava->id = "1";
        $canecaJava->nome = "Nome caneca";
        $canecaJava->cor = "Branca";
        $canecaJava->quantidade = "4";
        $canecaJava->valor = "20.00";
        $canecaJava->save();
    return caneca::all();
    }
}
