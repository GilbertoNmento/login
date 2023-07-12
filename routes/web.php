<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\LoginController;
use App\Models\Card;
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
    return view('home');
});

route::get('/login/validar', [LoginController::class, 'validaUsuario'])->name('login.validar');

Route::get('/cadastro', function () {
    return view('formCadastro');
})->name('cadastro');

route::get('/login/cadastrar', [LoginController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');

//route::get('/dashboard', [LoginController::class, 'validaUsuario'])->name('dashboard');
Route::get('/cadastro/card', function () {
    return view('formCard');
})->name('cadastro.card');

route::get('/cadastro/card/cadastrar', [CardController::class, 'cardCadastro'])->name('cadastrar.card');
route::get('/cards', [CardController::class, 'cards'])-> name('Card.cadastrado');

