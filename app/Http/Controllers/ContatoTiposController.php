<?php

namespace App\Http\Controllers;

use App\Models\ContatoTipo;
use Illuminate\Http\Request;

class ContatoTiposController extends Controller
{
    public function index (Request $request)
    {
        // Obtém a lista de itens da Tabela
        $tipos = ContatoTipo::query()->orderBy('nomeContatoTipo')->get();

        // Obtém a mensagem retornada via Session de Request
        $mensagem = $request->session()->get('mensagem');

        return view ('contato_tipos.index', compact('tipos', 'mensagem'));
    }
}
