<?php

namespace App\Http\Controllers\Recepcionista\GenerarCita;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class GenerarCitaController extends Controller{

    public function index(){
        //dd("Index de generar cita");
        return view("app.recepcionista.citas.index");
    	//return view("app.administrador.modulos.isr.index",["isr_items"=>$isr_items]);
    }

    public function registrar(){
        return view("app.recepcionista.citas.registrar");
    }

    public function agregar(Request $request){
        
    }

    public function editar($id){
        return view("app.recepcionista.citas.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}