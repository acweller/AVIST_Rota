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

// Ordenação Sort OrderBy
// https://www.itsolutionstuff.com/post/laravel-eloquent-order-by-query-exampleexample.html

class EmpresasController extends Controller
{
    public function index (Request $request) {
        // Obtém a lista de itens da Tabela
        $empresas = Empresa::query()->orderBy('nomeEmpresa', 'asc')->get();
        // In Random Order - Aleatório
        //$empresas = Empresa::query()->inRandomOrder()->get();

        // Obtém a mensagem retornada via Session de Request
        $mensagem = $request->session()->get('mensagem');

        return view ('empresas.index', compact('empresas', 'mensagem'));
    }

    public function profile (int $empresaId) {
        // Obtém a empresa pelo ID
        $empresa = Empresa::find($empresaId);

        // Busca a descrição do Tipo de Empresa
        $empresaTipo = $empresa->empresaTipo;

        // Busca os Contatos
        ////$contatos = $empresa->empresaContatos()->get();
        $contatos = $empresa->empresaContatos;
        // Busca os Endereços
        $enderecos = $empresa->empresaEnderecos;
        // Busca as Imagems
        $imagems = $empresa->empresaImagems;
        // Busca as Informações
        $informacaos = $empresa->empresaInformacaos;
        // Busca as Pessoas
        $pessoas = $empresa->empresaPessoas;
        // Busca os Produtos
        $produtos = $empresa->empresaProdutos;
        // Busca os Serviçoes
        $servicos = $empresa->empresaServicos;

        //var_dump($empresaTipo);
        //return;
        
        return view ('empresas.profile', 
                    compact(
                        'empresaTipo',
                        'empresa',
                        'contatos',
                        'enderecos',
                        'imagems',
                        'informacaos',
                        'pessoas',
                        'produtos',
                        'servicos')
                    );

        // Usando a query
        //$temporadas =  Temporada::query()->where('serie_id', $serieId)->orderBy('numero')->get();
        //var_dump($temporadas);
    }

}
