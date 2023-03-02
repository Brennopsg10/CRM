<?php

use App\Http\Controllers\CrmPessoaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return to_route('pessoa.index');
});

Route::resource('/pessoa', CrmPessoaController::class)->only('index', 'create');

// Route::controller( CrmPessoaController::class)->group(function(){
//     Route::get('/pessoa', 'pessoa.create' );
// });
