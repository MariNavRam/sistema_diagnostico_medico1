<?php

namespace App\Http\Controllers\Recepcionista\RegistrarPaciente;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class RegistrarPacienteController extends Controller{

    public function index(){
        //dd("Index de registrar paciente");
    	return view("app.recepcionista.pacientes.index");
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