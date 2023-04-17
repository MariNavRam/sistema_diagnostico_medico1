<?php

namespace App\Http\Controllers\Medico\Tratamiento;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class TratamientoController extends Controller{

    public function index(){
    	if($request->user()->tipo == 'admin' OR $request->user()->tipo == 'medico'){
            return view("app.medico.generar_diagnostico");
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }  
    }

    public function registrar(){
        
    }

    public function agregar(Request $request){
        
    }

    public function editar($id){
       
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}