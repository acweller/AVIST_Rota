<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\EmpresaContato;
use App\Models\EmpresaEndereco;
use App\Models\EmpresaImagem;
use App\Models\EmpresaInformacao;
use App\Models\EmpresaPessoa;
use App\Models\EmpresaProduto;
use App\Models\EmpresaServico;
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
        // Obtém a empresa pelo ID
        $empresa = Empresa::find($empresaId);

        /*
        // Busca os Contatos
        $contatos = EmpresaContato::find($empresaId);
        // Busca os Endereços
        $enderecos = EmpresaEndereco::find($empresaId);
        // Busca as Imagems
        $imagems = EmpresaImagem::find($empresaId);
        */
        // Busca as Informações
        $informacaos = EmpresaInformacao::find($empresaId);
        /*
        // Busca as Pessoas
        $pessoas = EmpresaPessoa::find($empresaId);
        // Busca os Produtos
        $produtos = EmpresaProduto::find($empresaId);
        // Busca os Serviçoes
        $servicos = EmpresaServico::find($empresaId);
        */

        var_dump($informacaos);
        //return view ('empresas.profile', compact('empresa'));//, 'contatos'));

        // Usando a query
        //$temporadas =  Temporada::query()->where('serie_id', $serieId)->orderBy('numero')->get();

        //var_dump($temporadas);
    }

}
