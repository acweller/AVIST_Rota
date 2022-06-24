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

        // Busca os Contatos
        $contatos = $empresa->empresaContatos;
        ////$contatos = $empresa->empresaContatos()->get();
        
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

        //var_dump($servicos);
        

        return view ('empresas.profile', compact('empresa'));//, 'contatos'));

        // Usando a query
        //$temporadas =  Temporada::query()->where('serie_id', $serieId)->orderBy('numero')->get();
        //var_dump($temporadas);
    }

}
