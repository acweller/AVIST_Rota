<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // Obtém a lista de itens da Tabela Series
        $series = Serie::query()->orderBy('nome')->get();
        //$series = Serie::all();

        // Obtém a mensagem retornada via Session de Request
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        // Enviado para SeriesFormRequest
        //// Valida se os dados foram enviados (se houver erro retorna para a página)
        //$request->validate([
        //    'nome' => 'required|min:3|max:255'
        //]);

        //dd($request()->all());

        // Insere a nova Série através do Model Serie
        // Configurando a opção de FILLABLE em MODELS
        $serie = Serie::create($request->all());
        // Quando quisermos informar campo por campo
        //$serie = Serie::create(['nome' => $request->nome]);

        // Obtenho o número de temporadas e inicializa o episódio por temporada
        $qtd_temporadas = empty($request->qtd_temporadas) ? 0 : $request->qtd_temporadas;
        $ep_por_temporada = 0;

        // Monto todas as temporadas da série
        for ($i = 1; $i <= $qtd_temporadas; $i++) {

            // Monto uma temporada para a série
            $temporada = $serie->temporadas()->create(['numero' => $i]);

            // Obtenho o número de episódios
            $ep_por_temporada = empty($request->ep_por_temporada) ? 0 : $request->ep_por_temporada;

            // Monto todos os episódios da temporada
            for ($j = 1; $j <= $ep_por_temporada; $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
        }

        // Envia mensagem de sucesso através da Sessão da Requisição
        $request->session()
            ->flash(
                'mensagem',
                "Série ({$serie->id}) {$serie->nome} criada com sucesso ({$qtd_temporadas} temporadas e {$ep_por_temporada} episódios cada)!!"
            );

        // Redireciona para a View/Index de Series
        //return redirect('/series');                       ==> Quando redirecionando para uma URL
        //return to_route('rota_listar_series');            ==> Ao usar o padrão Laravel 9.x
        return redirect()->route('rota_listar_series');  // ==> Para rotas nomeadas (sem precisar saber a URL)
    }

    public function destroy(Request $request)
    {
        // Destroi um item de Séries
        Serie::destroy($request->id);

        // Envia mensagem de sucesso através da Sessão da Requisição
        $request->session()
            ->flash(
                'mensagem',
                "Série '{$request->id}' excluída com sucesso!!"
            );

        // Redireciona para a View/Index de Series
        //return redirect('/series');
        return redirect()->route('rota_listar_series');
    }
}
