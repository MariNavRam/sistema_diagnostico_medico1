<?php

namespace App\Http\Controllers\Medico\Consulta;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller{

    public function index(){
    	//return view("app.administrador.modulos.isr.index",["isr_items"=>$isr_items]);
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