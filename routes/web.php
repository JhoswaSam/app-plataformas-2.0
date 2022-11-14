<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DonativoController;
use App\Http\Controllers\OngController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/client', function () {
    return view('client.welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('ongs',OngController::class);

    Route::resource('categorias',CategoriaController::class);

    Route::resource('usuarios',UsuarioController::class);

    Route::resource('donativos',DonativoController::class);
});
