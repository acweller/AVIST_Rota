<?php

namespace App\Http\Controllers;

use App\Models\EmpresaImagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index (Request $request)
    {
        // Obtém a lista de itens da Tabela Series
        //$series = Serie::query()->orderBy('nome')->get();
        // Obtém a mensagem retornada via Session de Request
        //$mensagem = $request->session()->get('mensagem');
        //return view ('index.index');//, compact('series', 'mensagem'));

        // Obtém a lista de itens da Tabela
        //$imagems = EmpresaImagem::query()->where('imagem_tipo_id', 3)->inRandomOrder()->get();
        $imagems = DB::table('empresa_imagems')
                    ->join('empresas', 'empresas.id', '=', 'empresa_imagems.empresa_id')
                    ->select('empresa_imagems.*', 'empresas.linkGoogleMaps')
                    ->where('imagem_tipo_id', 3)
                    ->inRandomOrder()
                    ->get();

        // Obtém a mensagem retornada via Session de Request
        $mensagem = $request->session()->get('mensagem');

        return view ('index.index', compact('imagems', 'mensagem'));
    }
}
