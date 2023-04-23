<?php

namespace App\Http\Controllers\Administrador\Sintomas;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Sintoma;

class SintomasController extends Controller{

    public function index(Request $request){
        if($request->user()->tipo == 'admin'){
            $sintomas = Sintoma::all();
            return view("app.administrador.sintomas.index",["sintomas"=>$sintomas]);
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
    }

    public function registrar(Request $request){
        if($request->user()->tipo == 'admin'){
            return view("app.administrador.sintomas.registrar");
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
        
    }

    public function agregar(Request $request){
        $data = $request->all();
        $sintoma = new Sintoma();
        $sintoma->nombre = $data['sintoma'];
        $sintoma->save();
        return redirect()->route('SintomasIndex')->with('message', '¡Se agregó el nuevo síntoma con éxito!');
    }

    public function editar($id){
        return view("app.administrador.sintomas.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}