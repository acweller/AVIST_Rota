<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Http\Request;

class TemporadasController extends Controller
{
    public function index (int $serieId) {

        // Obtém a lista de temporadas da Série
        //$temporadas = Serie::find($serieId)->temporadas;

        $serie = Serie::find($serieId);
        $temporadas = $serie->temporadas;
        return view ('temporadas.index', compact('serie', 'temporadas'));//,'serie'));

        // Usando a query
        //$temporadas =  Temporada::query()->where('serie_id', $serieId)->orderBy('numero')->get();

        //var_dump($temporadas);
    }
}
