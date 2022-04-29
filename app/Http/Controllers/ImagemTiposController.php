<?php

namespace App\Http\Controllers;

use App\Models\ImagemTipo;
use Illuminate\Http\Request;

class ImagemTiposController extends Controller
{
    public function index (Request $request) {

        // Obtém a lista de itens da Tabela
        $tipos = ImagemTipo::query()->orderBy('nomeImagemTipo')->get();

        // Obtém a mensagem retornada via Session de Request
        $mensagem = $request->session()->get('mensagem');

        return view ('imagem_tipos.index', compact('tipos', 'mensagem'));
    }
}
