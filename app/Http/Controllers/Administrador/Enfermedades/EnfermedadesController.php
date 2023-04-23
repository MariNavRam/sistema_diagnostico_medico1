<?php

namespace App\Http\Controllers\Administrador\Enfermedades;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Enfermedad;

class EnfermedadesController extends Controller{

    public function index(Request $request){
        if($request->user()->tipo == 'admin'){
            $enfermedades = Enfermedad::all();
            //dd($enfermedades);
            return view("app.administrador.enfermedades.index",["enfermedades"=>$enfermedades]);
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