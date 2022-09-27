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
Route::prefix('/produtos')->group(function(){

    Route::namespace('App\Http\Controllers')->group(function(){

        Route::name('produtos.')->group(function(){
            Route::get('/cadastrar', 'ProdutoController@cadastrar')->name('cadastrar');//rota para cadastrar novo produto
            
            Route::get('/{id}', 'ProdutoController@show')->name('show');//rota para exibir um produto específico */
            
            Route::get('/', 'ProdutoController@index')->name('index');//rota para a listagem de produtos
        });
    });
});

/* Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index')->name('produtos.index');//rota para a listagem de produtos

Route::get('/produtos/cadastrar', 'App\Http\Controllers\ProdutoController@cadastrar')->name('produtos.cadastrar');//rota para cadastrar novos produtos

Route::get('/produtos/{id}', 'App\Http\Controllers\ProdutoController@show')->name('produtos.show');//rota para exibir um produto específico */




Route::get('/login', function(){
    return 'Faça o Login';
})->name('login');


//Começo Rotas criadas na aula de rotas

/* 
//Início grupo de rotas
//Rotas para a área administrativa (admin)

Route::middleware(['App\Http\Middleware\Authenticate'])->group(function(){

    Route::prefix('admin')->group(function(){

        Route::namespace('App\Http\Controllers\Admin')->group(function(){

            Route::name('admin.')->group(function(){
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
            
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
            
                Route::get('/produtos', 'TesteController@teste')->name('produtos');
                
                Route::get('/', 'TesteController@teste')->name('home');

            });
        });


        Route::get('/', function(){
            return 'Admin';
        });//rota raiz ou rota /

        
    });
});

Route::group([
    'middleware' => ['App\Http\Middleware\Authenticate'],
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin'
    //o name não funciona

], function(){
    Route::name('admin.')->group(function(){
        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
    
        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
    
        Route::get('/produtos', 'TesteController@teste')->name('produtos');
        
        Route::get('/', 'TesteController@teste')->name('home');

    });
});

Route::get('admin/dashboard', function(){
    return 'Home admin';
})->middleware('auth');//middleware('auth'); faz com que seja necessário uma autenticação para acessar a área admin, assim, irá redirecionar para a rota /login. É possível passar um array com diversos middleware existentes como por exemplo middleware(['auth', outraMiddleware]); 

Route::get('admin/financeiro', function(){
    return 'Financeiro admin';
})->middleware('auth');

Route::get('admin/produtos', function(){
    return 'Produtos admin';
})->middleware('auth');
 
//Fim grupo de rotas

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

Route::get('/redirect1', function(){
    return redirect('/redirect2');
});

Route::redirect('/redirect1', '/redirect2');

Route::get('/redirect2', function(){
    return 'Redirect 2';
});

Route::get('/view', function(){
    return view('sobre');
});

Route::view('/view', 'sobre');

//Rotas nomeadas
Route::get('/url-quem-somos', function(){
    return '12345678';
})->name('quem.somos');

Route::get('/redirect3', function(){
    return redirect()->route('quem.somos');
}); 
*/
//Fim Rotas criadas na aula de rotas