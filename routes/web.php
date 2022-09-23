<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function (){
    return 'Página de contatos';
});

Route::get('/empresa', function (){
    return view('site.empresa');
});

Route::any('/any', function (){
    return 'Any';
});

Route::match(['get', 'post'], '/match', function (){
    return 'Match';
});

Route::get('/contato/{flag}', function ($contato){
    return "Contato via {$contato}";
});

Route::get('/categoria/{flag}/posts', function ($categoria){
    return "Posts da categoria: {$categoria}";
});

Route::get('/produtos/{idProduto?}', function ($idProduto = ''){
    return "Produto(s): {$idProduto}";
});

/* Route::get('/redirect1', function(){
    return redirect('/redirect2');
}); */

Route::redirect('/redirect1', '/redirect2');

Route::get('/redirect2', function(){
    return 'Redirect 2';
});

/* Route::get('/view', function(){
    return view('sobre');
}); */

Route::view('/view', 'sobre');

/* Rotas nomeadas */
Route::get('/url-quem-somos', function(){
    return '12345678';
})->name('quem.somos');

Route::get('/redirect3', function(){
    return redirect()->route('quem.somos');
});