<?php

use Illuminate\Support\Facades\Route;
use App\TipoProduto;
use App\Produto;

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

Route::resource('tipoproduto', 'TipoProdutoController');
Route::resource('produto', 'ProdutoController');