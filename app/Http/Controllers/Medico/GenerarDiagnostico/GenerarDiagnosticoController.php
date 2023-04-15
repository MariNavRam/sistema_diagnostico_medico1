<?php

namespace App\Http\Controllers\Medico\GenerarDiagnostico;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class GenerarDiagnosticoController extends Controller{

    public function index(){
        //dd("index de generar diagnóstico");
    	return view("app.medico.generar_diagnostico");
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