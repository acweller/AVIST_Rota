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

    public function profile (int $empresaId) {

        // Obtém a lista de temporadas da Série
        //$temporadas = Serie::find($serieId)->temporadas;

        $empresa = Empresa::find($empresaId);
        //$temporadas = $serie->temporadas;
        return view ('empresas.profile', compact('empresa'));//, 'contatos'));

        // Usando a query
        //$temporadas =  Temporada::query()->where('serie_id', $serieId)->orderBy('numero')->get();

        //var_dump($temporadas);
    }

}
