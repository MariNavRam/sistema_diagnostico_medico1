<?php

namespace App\Http\Controllers\Administrador\Enfermedades;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class EnfermedadesController extends Controller{

    public function index(Request $request){
        if($request->user()->tipo == 'admin'){
            return view("app.administrador.enfermedades.index");
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
    	
    }

    public function registrar(){
        return view("app.administrador.enfermedades.registrar");
    }

    public function agregar(Request $request){
        
    }

    public function editar($id){
        return view("app.administrador.enfermedades.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}