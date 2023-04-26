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
    'uses' => 'App\Http\Controllers\Medico\Consulta\ConsultaController@index',
    'as' => 'consultaIndex'
]);

Route::get('/diagnosticos',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@index',
    'as' => 'DiagnosticosIndex'
]);

Route::get('/crear_diagnostico',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@registrar',
    'as' => 'CrearDiagnostico'
]);

Route::get('/add_signo_a_tabla',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@add_signo_a_tabla',
    'as' => 'AgregarSignoATabla'
]);

Route::get('/add_sintoma_a_tabla',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@add_sintoma_a_tabla',
    'as' => 'AgregarSintomaATabla'
]);

Route::get('/add_prueba_a_tabla',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@add_prueba_a_tabla',
    'as' => 'AgregarPruebaATabla'
]);

Route::post('/generar_diagnostico',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@agregar',
    'as' => 'GenerarDiagnostico'
]);

Route::get('/tratamientos',[
    'uses' => 'App\Http\Controllers\Medico\Tratamiento\Tratamientoontroller@index',
    'as' => 'TratamientosIndex'
]);

Route::get('/citas',[
    'uses' => 'App\Http\Controllers\Recepcionista\GenerarCita\GenerarCitaController@index',
    'as' => 'CitasIndex'
]);

Route::get('/crear_cita',[
    'uses' => 'App\Http\Controllers\Recepcionista\GenerarCita\GenerarCitaController@registrar',
    'as' => 'CrearCita'
]);

Route::post('/agregar_cita',[
    'uses' => 'App\Http\Controllers\Recepcionista\GenerarCita\GenerarCitaController@agregar',
    'as' => 'AgregarCita'
]);

Route::get('/cambiar_estado_de_cita',[
    'uses' => 'App\Http\Controllers\Recepcionista\GenerarCita\GenerarCitaController@cambiar_estado_de_cita',
    'as' => 'CambiarEstadoDeCita'
]);

Route::get('/pacientes',[
    'uses' => 'App\Http\Controllers\Recepcionista\RegistrarPaciente\RegistrarPacienteController@index',
    'as' => 'PacientesIndex'
]);

Route::get('/registrar_paciente',[
    'uses' => 'App\Http\Controllers\Recepcionista\RegistrarPaciente\RegistrarPacienteController@registrar',
    'as' => 'RegistrarPaciente'
]);

Route::post('/agregar_paciente',[
    'uses' => 'App\Http\Controllers\Recepcionista\RegistrarPaciente\RegistrarPacienteController@agregar',
    'as' => 'AgregarPaciente'
]);

Route::get('/usuarios',[
    'uses' => 'App\Http\Controllers\Administrador\Usuarios\UsuarioController@index',
    'as' => 'UsuariosIndex'
]);

Route::get('/registrar_usuario',[
    'uses' => 'App\Http\Controllers\Administrador\Usuarios\UsuarioController@registrar',
    'as' => 'RegistrarUsuario'
]);

Route::post('/agregar_usuario',[
    'uses' => 'App\Http\Controllers\Administrador\Usuarios\UsuarioController@agregar',
    'as' => 'AgregarUsuario'
]);

Route::get('/enfermedades',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@index',
    'as' => 'EnfermedadesIndex'
]);

Route::get('/registrar_enfermedad',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@registrar',
    'as' => 'RegistrarEnfermedad'
]);

Route::post('/agregar_enfermedad',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@agregar',
    'as' => 'AgregarEnfermedad'
]);

Route::get('/signos',[
    'uses' => 'App\Http\Controllers\Administrador\Signos\SignosController@index',
    'as' => 'SignosIndex'
]);

Route::get('/registrar_signos',[
    'uses' => 'App\Http\Controllers\Administrador\Signos\SignosController@registrar',
    'as' => 'RegistrarSigno'
]);

Route::post('/agregar_signos',[
    'uses' => 'App\Http\Controllers\Administrador\Signos\SignosController@agregar',
    'as' => 'AgregarSigno'
]);

Route::get('/sintomas',[
    'uses' => 'App\Http\Controllers\Administrador\Sintomas\SintomasController@index',
    'as' => 'SintomasIndex'
]);

Route::get('/registrar_sintomas',[
    'uses' => 'App\Http\Controllers\Administrador\Sintomas\SintomasController@registrar',
    'as' => 'RegistrarSintoma'
]);

Route::post('/agregar_sintomas',[
    'uses' => 'App\Http\Controllers\Administrador\Sintomas\SintomasController@agregar',
    'as' => 'AgregarSintoma'
]);

Route::get('/historiales_de_consulta',[
    'uses' => 'App\Http\Controllers\Recepcionista\HistorialConsulta\HistorialConsultaController@index',
    'as' => 'HistorialesDeConsultaIndex'
]);

Route::get('/registrar_historial_de_consulta',[
    'uses' => 'App\Http\Controllers\Recepcionista\HistorialConsulta\HistorialConsultaController@registrar',
    'as' => 'RegistrarHistorialDeConsulta'
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
