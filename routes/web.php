<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PerrosController;
use App\Http\Controllers\GatosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\PerfilController;
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
    return view('home.index');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);


Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);


Route::get('/perros', [PerrosController::class, 'perros'])->name('perros_p');
Route::get('/gatos', [GatosController::class, 'gatos'])->name('gatos_p');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs_p');
Route::get('/servicios', [ServiciosController::class, 'servicios'])->name('services_p');
Route::get('/perfil', [PerfilController::class, 'perfil'])->name('perfil_p');

Route::get('/perfil', [PerfilController::class, 'perfil'])->name('perfil.mostrar');
Route::post('/perfil/actualizar', [PerfilController::class, 'actualizarPerfil'])->name('perfil.actualizar');

Route::post('/update-photo', [RegisterController::class, 'updatePhoto'])->name('update.photo');




