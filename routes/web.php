<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\EmpresasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/elsalvador', [HomeController::class, 'elsalvador'])->name('elsalvador');

// Rutas para categorías
Route::get('/administracion/categorias', [CategoriasController::class, 'inicio'])->name('categorias');
Route::post('/administracion/categorias/crear', [CategoriasController::class, 'agregar'])->name('categorias.agregar');
Route::post('/administracion/categorias/actualizar/{id}', [CategoriasController::class, 'actualizar'])->name('categorias.actualizar');
Route::delete('/administracion/categorias/eliminar/{id}', [CategoriasController::class, 'eliminar'])->name('categorias.eliminar');

// Rutas para empresas
Route::get('/administracion/empresas', [EmpresasController::class, 'inicio'])->name('empresas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
