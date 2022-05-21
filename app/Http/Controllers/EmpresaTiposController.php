<?php

namespace App\Http\Controllers;

use App\Models\EmpresaTipo;
use Illuminate\Http\Request;

class EmpresaTiposController extends Controller
{
    public function index (Request $request) {
        // Obtém a lista de itens da Tabela
        $tipos = EmpresaTipo::query()->orderBy('nomeEmpresaTipo')->get();

        // Obtém a mensagem retornada via Session de Request
        $mensagem = $request->session()->get('mensagem');

        return view ('empresa_tipos.index', compact('tipos', 'mensagem'));
    }
}
