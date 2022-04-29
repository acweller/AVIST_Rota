<?php

namespace App\Http\Controllers;

use App\Models\InformacaoTipo;
use Illuminate\Http\Request;

class InformacaoTiposController extends Controller
{
    public function index (Request $request) {

        // Obtém a lista de itens da Tabela
        $tipos = InformacaoTipo::query()->orderBy('nomeInformacaoTipo')->get();

        // Obtém a mensagem retornada via Session de Request
        $mensagem = $request->session()->get('mensagem');

        return view ('informacao_tipos.index', compact('tipos', 'mensagem'));
    }
}
