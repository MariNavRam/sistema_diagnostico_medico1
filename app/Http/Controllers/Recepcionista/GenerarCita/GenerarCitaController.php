<?php

namespace App\Http\Controllers\Recepcionista\GenerarCita;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Cita;

class GenerarCitaController extends Controller{

    public function index(){
        $citas = Cita::all();
        return view("app.recepcionista.citas.index",["citas"=>$citas]);
    }

    public function registrar(Request $request){
        if($request->user()->tipo == 'admin' OR $request->user()->tipo == 'recepcionista'){
            return view("app.recepcionista.citas.registrar");
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }  
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