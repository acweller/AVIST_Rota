<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TemporadasController;

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

Route::get('/series', [SeriesController::class, 'index'])
    ->name('rota_listar_series');
Route::get('/series/criar', [SeriesController::class, 'create'])
    ->name('rota_form_criar_serie');
Route::post('/series/criar', [SeriesController::class, 'store'])
    ->name('rota_salvar_serie');
//Route::post('/series/remover/{id}', [SeriesController::class, 'destroy']);
Route::delete('/series/{id}', [SeriesController::class, 'destroy'])
    ->name('rota_remover_serie');

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
