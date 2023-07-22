<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/home-medico', [App\Http\Controllers\HomeController::class, 'index'])->name('home-medico');
Route::get('/home-cliente', [App\Http\Controllers\HomeController::class, 'index'])->name('home-cliente');

// Rutas para el restablecimiento de contraseña
// Rutas para el restablecimiento de contraseña
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');



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

    //rutas adopcion

    Route::get('/adoption', [App\Http\Controllers\Admin\AdoptionController::class, 'index']);
    Route::get('/adoption/create', [App\Http\Controllers\Admin\AdoptionController::class, 'create']);
    Route::get('/adoption/{pet}/edit', [App\Http\Controllers\Admin\AdoptionController::class, 'edit']);
    Route::post('/adoption', [App\Http\Controllers\Admin\AdoptionController::class, 'sendData']);
    Route::post('/adoptions', [App\Http\Controllers\Admin\AdoptionController::class, 'store']);

    Route::put('/adoption/{pet}', [App\Http\Controllers\Admin\AdoptionController::class, 'update']);
    Route::delete('/adoption/{pet}', [App\Http\Controllers\Admin\AdoptionController::class, 'destroy']);

    //rutas reportes
    Route::get('/reportes/citas/line', [App\Http\Controllers\Admin\ChartController::class, 'appointments']);
    Route::get('/reportes/doctors/column', [App\Http\Controllers\Admin\ChartController::class, 'doctors']);
    Route::get('/reportes/doctors/column/data', [App\Http\Controllers\Admin\ChartController::class, 'doctorsJson']);
});


Route::middleware(['auth', 'Medico'])->group(function () {
    //Ruta horarios
    Route::get('/horario', [App\Http\Controllers\Veterinario\HorarioController::class, 'edit']);
    Route::post('/horario', [App\Http\Controllers\Veterinario\HorarioController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/reservarcitas/create', [App\Http\Controllers\AppointmentController::class, 'create']);
    Route::post('/reservarcitas', [App\Http\Controllers\AppointmentController::class, 'store']);
    Route::get('/miscitas', [App\Http\Controllers\AppointmentController::class, 'index']);
    Route::get('/miscitas/{appointment}', [App\Http\Controllers\AppointmentController::class, 'show']);
    Route::post('/miscitas/{appointment}/cancel', [App\Http\Controllers\AppointmentController::class, 'cancel']);
    Route::post('/miscitas/{appointment}/confirm', [App\Http\Controllers\AppointmentController::class, 'confirm']);
    Route::get('/miscitas/{appointment}/cancel', [App\Http\Controllers\AppointmentController::class, 'formCancel']);
    // Route::delete('/miscitas/{appointment}', [App\Http\Controllers\AppointmentController::class, 'destroy']);

    //json
    Route::get('/especialidades/{specialty}/medicos', [App\Http\Controllers\Api\SpecialtyController::class, 'doctors']);
    Route::get('/horario/horas', [App\Http\Controllers\Api\HorarioController::class, 'hour']);

    Route::get('/pets-cliente', [App\Http\Controllers\PetsclienteController::class, 'index']);
    Route::get('/pets-cliente/create', [App\Http\Controllers\PetsclienteController::class, 'create']);
    Route::get('/pets-cliente/{pet}/edit', [App\Http\Controllers\PetsclienteController::class, 'edit']);
    Route::post('/pets-cliente', [App\Http\Controllers\PetsclienteController::class, 'sendData']);

    Route::put('/pets-cliente/{pet}', [App\Http\Controllers\PetsclienteController::class, 'update']);
    Route::delete('/pets-cliente/{pet}', [App\Http\Controllers\PetsclienteController::class, 'destroy']);

    Route::get('/profile', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/profile', [App\Http\Controllers\UserController::class, 'update']);
});
