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

    public function registrar(Request $request){
        if($request->user()->tipo == 'admin'){
            return view("app.administrador.enfermedades.registrar");
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
        
    }

    public function agregar(Request $request){
        $data = $request->all();
        $enfermedad = new Enfermedad();
        $enfermedad->nombre = $data['enfermedad'];
        $enfermedad->causa = $data['causa'];
        $enfermedad->save();
        return redirect()->route('EnfermedadesIndex')->with('message', '¡Se agregó el nuevo síntoma con éxito!');
    }

    public function editar($id){
        return view("app.administrador.enfermedades.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}