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

Route::middleware(['auth', 'Admin'])->group(function () {

    //ruta especialidades
    Route::get('/especialidades', [App\Http\Controllers\Admin\SpecialtyController::class, 'index']);
    Route::get('/especialidades/create', [App\Http\Controllers\Admin\SpecialtyController::class, 'create']);
    Route::get('/especialidades/{specialty}/edit', [App\Http\Controllers\Admin\SpecialtyController::class, 'edit']);
    Route::post('/especialidades', [App\Http\Controllers\Admin\SpecialtyController::class, 'sendData']);

    Route::put('/especialidades/{specialty}', [App\Http\Controllers\Admin\SpecialtyController::class, 'update']);
    Route::delete('/especialidades/{specialty}', [App\Http\Controllers\Admin\SpecialtyController::class, 'destroy']);

    //rutas medicos
    Route::resource('medicos', 'App\Http\Controllers\Admin\DoctorController');

    //rutas pacientes
    Route::resource('clientes', 'App\Http\Controllers\Admin\PacientesController');

    //rutas mascotas
    Route::get('/pets', [App\Http\Controllers\Admin\PetsController::class, 'index']);
    Route::get('/pets/create', [App\Http\Controllers\Admin\PetsController::class, 'create']);
    Route::get('/pets/{pet}/edit', [App\Http\Controllers\Admin\PetsController::class, 'edit']);
    Route::post('/pets', [App\Http\Controllers\Admin\PetsController::class, 'sendData']);

    Route::put('/pets/{pet}', [App\Http\Controllers\Admin\PetsController::class, 'update']);
    Route::delete('/pets/{pet}', [App\Http\Controllers\Admin\PetsController::class, 'destroy']);
});


Route::middleware(['auth', 'Medico'])->group(function () {

    Route::get('/horario', [App\Http\Controllers\Veterinario\HorarioController::class, 'edit']);
    Route::post('/horario', [App\Http\Controllers\Veterinario\HorarioController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/reservarcitas/create', [App\Http\Controllers\AppointmentController::class, 'create']);
    Route::post('/reservarcitas', [App\Http\Controllers\AppointmentController::class, 'store']);
    Route::get('/miscitas', [App\Http\Controllers\AppointmentController::class, 'index']);
    Route::get('/miscitas/{appointment}', [App\Http\Controllers\AppointmentController::class, 'destroy']);
    Route::post('/miscitas/{appointment}/cancel', [App\Http\Controllers\AppointmentController::class, 'cancel']);
    Route::get('/miscitas/{appointment}/cancel', [App\Http\Controllers\AppointmentController::class, 'formCancel']);
    Route::delete('/miscitas/{appointment}', [App\Http\Controllers\AppointmentController::class, 'destroy']);

    //json
    Route::get('/especialidades/{specialty}/medicos', [App\Http\Controllers\Api\SpecialtyController::class, 'doctors']);
    Route::get('/horario/horas', [App\Http\Controllers\Api\HorarioController::class, 'hour']);
});
