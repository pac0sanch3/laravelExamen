<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\EditarController;
use App\Models\usuarios;

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
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

Route::delete('/usuarios.edit/{id}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

Route::get('/usuarios.edit/{id}', [UsuariosController::class, 'edit'])->name('usuarios.edit');

/* Route::get('/editar/{id}', [EditarController::class, 'edit'])->name('editar.edit'); */

Route::put('/editar.update', [UsuariosController::class, 'update'])->name('editar.update');

