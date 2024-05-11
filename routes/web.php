<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});


Route::get('/', [\App\Http\Controllers\PaginaInicialController::class, 'paginaInicial'])->name('site.index');
Route::get('/pagina-inicial', [\App\Http\Controllers\PaginaInicialController::class, 'redirect']);
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
Route::redirect('/sobrenos', '/sobre-nos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');
});

Route::fallback([\App\Http\Controllers\FallbackController::class, 'fallback']);
