<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DonativoController;
use App\Http\Controllers\OngController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsuarioController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {
    return view('test.test', [
        'user' => $request->user(),
    ]);
});

Route::get('/services',[TestController::class,'services']);
Route::get('/services/{id}',[TestController::class,'show']);
Route::get('/services/{id}/payment',[TestController::class,'payment']);
Route::post('/services/{id}/payment',[TestController::class,'paymentAction']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
],)->group(function () {
    


    Route::get('/dashboard', function (Request $request) {
        if ($request->user()->usuario) {
            return view('dashboard');
        } else {
            return redirect('/');
        }
            
    })->name('dashboard');
    

    Route::resource('ongs',OngController::class);
    
    Route::resource('categorias',CategoriaController::class);
    
    Route::resource('usuarios',UsuarioController::class);
    
    Route::resource('donativos',DonativoController::class);


});
