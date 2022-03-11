<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Canecas extends Controller
{
    public function cadastrar_caneca(){

        return view('cadastrarcaneca');
    }

    public function cadastrarcan_store(Request $request){
    //     $dadosvalidados = $request->validate([
    //         'id' => 'required',
    //         'nome' => 'required',
    //         'cor' => 'required',
    //         'quantidade' => 'required',
    //         'valor' => 'required',
    //     ]);

    //     $canecaJava = new caneca();
    //     $canecaJava->id = $dadosvalidados['id'];
    //     $canecaJava->nome = $dadosvalidados['nome'];
    //     $canecaJava->cor = $dadosvalidados['cor'];
    //     $canecaJava->quantidade = $dadosvalidados['quantidade'];
    //     $canecaJava->valor = $dadosvalidados['valor'];
    //     $canecaJava->save();

    return redirect()->back();
    }
}
