<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function index (Request $request) {
        // Obtém a lista de itens da Tabela
        $empresas = Empresa::query()->orderBy('nomeEmpresa')->get();

        // Obtém a mensagem retornada via Session de Request
        $mensagem = $request->session()->get('mensagem');

        return view ('empresas.index', compact('empresas', 'mensagem'));
    }
}
