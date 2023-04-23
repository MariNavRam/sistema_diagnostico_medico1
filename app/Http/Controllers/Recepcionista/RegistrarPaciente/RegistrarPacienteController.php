<?php

namespace App\Http\Controllers\Recepcionista\RegistrarPaciente;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Paciente;

class RegistrarPacienteController extends Controller{

    public function index(Request $request){
        $pacientes = Paciente::all();
        return view("app.recepcionista.pacientes.index",["pacientes"=>$pacientes]);
    }

    public function registrar(){
        return view("app.recepcionista.pacientes.registrar");
    }

    public function agregar(Request $request){
        
    }

    public function editar($id){
        return view("app.recepcionista.pacientes.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}