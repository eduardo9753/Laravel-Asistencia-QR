<?php

use App\Http\Controllers\trabajador\home\HomeController;
use App\Http\Controllers\usuario\asistencia\AsistenciaController;
use App\Http\Controllers\usuario\auth\LoginController;
use App\Http\Controllers\usuario\auth\RegisterController;
use App\Http\Controllers\usuario\departamento\DepartamentoController;
use App\Http\Controllers\usuario\menu\MenuController;
use App\Http\Controllers\usuario\posicion\PosicionController;
use App\Http\Controllers\usuario\trabajador\TrabajadorController;
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

//trabajador
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/trabajador/fetch', [HomeController::class, 'fetchTrabajador'])->name('trabajador.fetch');



//usuario
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/singIn', [LoginController::class, 'store'])->name('login.store');


Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register/singIn', [RegisterController::class, 'store'])->name('register.store');


Route::get('/menu', [MenuController::class, 'index'])->name('usuario.menu.index');

Route::get('/menu/usuario/departamento', [DepartamentoController::class, 'index'])->name('usuario.departamento.index');
Route::post('/menu/usuario/departamento/store', [DepartamentoController::class, 'store'])->name('usuario.departamento.store');

Route::get('/menu/usuario/posicion', [PosicionController::class, 'index'])->name('usuario.posicion.index');
Route::post('/menu/usuario/posicion/store', [PosicionController::class, 'store'])->name('usuario.posicion.store');

Route::get('/menu/usuario/trabajador', [TrabajadorController::class, 'index'])->name('usuario.trabajador.index');
Route::post('/menu/usuario/trabajador/store', [TrabajadorController::class, 'store'])->name('usuario.trabajdor.store');


Route::get('/menu/usuario/trabajador/asistencia/{id}', [AsistenciaController::class, 'index'])->name('usuario.asistencia.index');
Route::get('/menu/usuario/trabajador/asistencia/show/{id}', [AsistenciaController::class, 'show'])->name('usuario.asistencia.show');