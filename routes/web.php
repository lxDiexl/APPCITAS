<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta especialidades
Route::get('/especialidades', [App\Http\Controllers\SpecialtyController::class, 'index']);
Route::get('/especialidades/create', [App\Http\Controllers\SpecialtyController::class, 'create']);
Route::get('/especialidades/{specialty}/edit', [App\Http\Controllers\SpecialtyController::class, 'edit']);
Route::post('/especialidades', [App\Http\Controllers\SpecialtyController::class, 'sendData']);

Route::put('/especialidades/{specialty}', [App\Http\Controllers\SpecialtyController::class, 'update']);
Route::delete('/especialidades/{specialty}', [App\Http\Controllers\SpecialtyController::class, 'destroy']);

//rutas medicos
Route::resource('medicos','App\Http\Controllers\DoctorController');

//rutas pacientes
Route::resource('clientes','App\Http\Controllers\PacientesController');

//rutas mascotas
Route::get('/pets', [App\Http\Controllers\PetsController::class, 'index']);
Route::get('/pets/create', [App\Http\Controllers\PetsController::class, 'create']);
Route::get('/pets/{pet}/edit', [App\Http\Controllers\PetsController::class, 'edit']);
Route::post('/pets', [App\Http\Controllers\PetsController::class, 'sendData']);

Route::put('/pets/{pet}', [App\Http\Controllers\PetsController::class, 'update']);
Route::delete('/pets/{pet}', [App\Http\Controllers\PetsController::class, 'destroy']);
