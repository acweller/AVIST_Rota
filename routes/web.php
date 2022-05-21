<?php

use App\Http\Controllers\ContatoTiposController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\EmpresaTiposController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagemTiposController;
use App\Http\Controllers\InformacaoTiposController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index_site');

// Rota para os tipos de dados básicos (Sem CRUD)
Route::get('/empresa_tipos', [EmpresaTiposController::class, 'index'])
    ->name('rota_index_empresa_tipos');
Route::get('/contato_tipos', [ContatoTiposController::class, 'index'])
    ->name('rota_index_contato_tipos');
Route::get('/imagem_tipos', [ImagemTiposController::class, 'index'])
    ->name('rota_index_imagem_tipos');
Route::get('/informacao_tipos', [InformacaoTiposController::class, 'index'])
    ->name('rota_index_informacao_tipos');

// Rota para CRUD de Empresa
//Route::get('/empresas', [EmpresasController::class, 'index'])->name('rota_index_empresas');
Route::controller(EmpresasController::class)->group(function(){
    Route::get('/empresas', 'index')->name('rota_index_empresas');
});


// Agrupamento de Rotas da Séria (do Curso sobre Laravel)
Route::controller(SeriesController::class)->group(function(){
    Route::get('/series', 'index')->name('rota_listar_series');
    Route::get('/series/criar', 'create')->name('rota_form_criar_serie');
    Route::post('/series/criar', 'store')->name('rota_salvar_serie');
    //Route::post('/series/remover/{id}', [SeriesController::class, 'destroy']);
    Route::delete('/series/{id}', 'destroy')->whereNumber('id')->name('rota_remover_serie');
});
//Route::resource('/series', SeriesController::class)->except(['store']);
//Route::resource('/series', SeriesController::class)->only(['index', 'create', 'store']);


Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index'])
    ->name('rota_index_temporada');


//Route::resource('photos', PhotoController::class);

//Route::get('my-home', [HomeController::class, 'myHome']);
//Route::get('my-users', [HomeController::class, 'myUsers']);

// Rota Serra Gaúcha
// http://www.rotaserragaucha.com.br/vale-dos-vinhedos/vinicolas/

// Tema e exemplos do bootstrap
// https://bootstrap.build/app/project/MjrwgQJtoYUV
// https://themesberg.com/blog/laravel/themes-and-templates

// Background
// https://mdbootstrap.com/docs/standard/content-styles/background-image/

// https://www.cloudways.com/blog/laravel-bootstrap-template-integration/

// CSS e JS do Bootstrap
// https://www.bootstrapcdn.com/

//Icones do Bootstrap -- https://icons.getbootstrap.com/

// Espaçamento no Bootstrap
// https://getbootstrap.com/docs/5.1/utilities/spacing/

// (Flex) Layout Alinhamento e Tamanho no Bootstrap
// https://getbootstrap.com/docs/5.1/utilities/flex/
