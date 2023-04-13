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

Route::get('/consulta',[
    'uses' => 'Medico\Consulta\ConsultaController@index',
    'as' => 'consultaIndex'
]);

Route::get('/generar_diagnostico',[
    'uses' => 'Medico\GenerarDiagnostico\GenerarDiagnosticoController@index',
    'as' => 'GenerarDiagnosticoIndex'
]);

Route::get('/tratamiento',[
    'uses' => 'Medico\Tratamiento\Tratamientoontroller@index',
    'as' => 'TratamientoIndex'
]);

Route::get('/generar_cita',[
    'uses' => 'Recepcionista\GenerarCita\GenerarCitaController@index',
    'as' => 'GenerarCitaIndex'
]);

Route::get('/registrar_paciente',[
    'uses' => 'Recepcionista\RegistrarPaciente\RegistrarPacienteController@index',
    'as' => 'RegistrarPacienteIndex'
]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
