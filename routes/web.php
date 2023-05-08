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
Route::get('/editar_diagnostico/{id}',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@editar',
    'as' => 'EditarDiagnostico'
]);
Route::post('/actualizar_diagnostico',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@actualizar',
    'as' => 'ActualizarDiagnostico'
]);
Route::get('/eliminar_diagnostico/{id}',[
    'uses' => 'App\Http\Controllers\Medico\GenerarDiagnostico\GenerarDiagnosticoController@eliminar',
    'as' => 'EliminarDiagnostico'
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
Route::get('/editar_cita/{id}',[
    'uses' => 'App\Http\Controllers\Recepcionista\GenerarCita\GenerarCitaController@editar',
    'as' => 'EditarCita'
]);
Route::post('/actualizar_cita',[
    'uses' => 'App\Http\Controllers\Recepcionista\GenerarCita\GenerarCitaController@actualizar',
    'as' => 'ActualizarCita'
]);
Route::get('/eliminar_cita/{id}',[
    'uses' => 'App\Http\Controllers\Recepcionista\GenerarCita\GenerarCitaController@eliminar',
    'as' => 'EliminarCita'
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
Route::get('/editar_paciente/{id}',[
    'uses' => 'App\Http\Controllers\Recepcionista\RegistrarPaciente\RegistrarPacienteController@editar',
    'as' => 'EditarPaciente'
]);
Route::post('/actualizar_paciente',[
    'uses' => 'App\Http\Controllers\Recepcionista\RegistrarPaciente\RegistrarPacienteController@actualizar',
    'as' => 'ActualizarPaciente'
]);
Route::get('/eliminar_paciente/{id}',[
    'uses' => 'App\Http\Controllers\Recepcionista\RegistrarPaciente\RegistrarPacienteController@eliminar',
    'as' => 'EliminarPaciente'
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
Route::get('/editar_usuario/{id}',[
    'uses' => 'App\Http\Controllers\Administrador\Usuarios\UsuarioController@editar',
    'as' => 'EditarUsuario'
]);
Route::post('/actualizar_usuario',[
    'uses' => 'App\Http\Controllers\Administrador\Usuarios\UsuarioController@actualizar',
    'as' => 'ActualizarUsuario'
]);
Route::get('/eliminar_usuario/{id}',[
    'uses' => 'App\Http\Controllers\Administrador\Usuarios\UsuarioController@eliminar',
    'as' => 'EliminarUsuario'
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
Route::get('/editar_enfermedad/{id}',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@editar',
    'as' => 'EditarEnfermedad'
]);
Route::post('/actualizar_enfermedad',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@actualizar',
    'as' => 'ActualizarEnfermedad'
]);
Route::get('/eliminar_enfermedad/{id}',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@eliminar',
    'as' => 'EliminarEnfermedad'
]);

Route::get('/enfermedades_add_signo_a_tabla',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@add_signo_a_tabla',
    'as' => 'EnfermedadesAgregarSignoATabla'
]);

Route::get('/enfermedades_add_sintoma_a_tabla',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@add_sintoma_a_tabla',
    'as' => 'EnfermedadesAgregarSintomaATabla'
]);

Route::get('/enfermedades_add_prueba_a_tabla',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@add_prueba_a_tabla',
    'as' => 'EnfermedadesAgregarPruebaATabla'
]);

Route::get('/enfermedades_add_tratamiento_a_tabla',[
    'uses' => 'App\Http\Controllers\Administrador\Enfermedades\EnfermedadesController@add_tratamiento_a_tabla',
    'as' => 'EnfermedadesAgregarTratamientoATabla'
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
Route::get('/editar_signos/{id}',[
    'uses' => 'App\Http\Controllers\Administrador\Signos\SignosController@editar',
    'as' => 'EditarSigno'
]);
Route::post('/actualizar_signos',[
    'uses' => 'App\Http\Controllers\Administrador\Signos\SignosController@actualizar',
    'as' => 'ActualizarSigno'
]);
Route::get('/eliminar_signos/{id}',[
    'uses' => 'App\Http\Controllers\Administrador\Signos\SignosController@eliminar',
    'as' => 'EliminarSigno'
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
Route::get('/editar_sintomas/{id}',[
    'uses' => 'App\Http\Controllers\Administrador\Sintomas\SintomasController@editar',
    'as' => 'EditarSintoma'
]);
Route::post('/actualizar_sintomas',[
    'uses' => 'App\Http\Controllers\Administrador\Sintomas\SintomasController@actualizar',
    'as' => 'ActualizarSintoma'
]);
Route::get('/eliminar_sintomas/{id}',[
    'uses' => 'App\Http\Controllers\Administrador\Sintomas\SintomasController@eliminar',
    'as' => 'EliminarSintoma'
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
