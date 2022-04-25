<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (Request $request)
    {

        // Obtém a lista de itens da Tabela Series
        //$series = Serie::query()->orderBy('nome')->get();

        // Obtém a mensagem retornada via Session de Request
        //$mensagem = $request->session()->get('mensagem');

        return view ('index.index');//, compact('series', 'mensagem'));
    }
}
