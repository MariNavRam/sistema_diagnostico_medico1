<?php

namespace App\Http\Controllers\Administrador\Signos;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Signo;

class SignosController extends Controller{

    public function index(Request $request){
        if($request->user()->tipo == 'admin'){
            $signos = Signo::all();
            return view("app.administrador.signos.index",["signos"=>$signos]);
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
    }

    public function registrar(Request $request){
        if($request->user()->tipo == 'admin'){
            return view("app.administrador.signos.registrar");
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
        
    }

    public function agregar(Request $request){
        $data = $request->all();
        $signo = new Signo();
        $signo->nombre = $data['signo'];
        $signo->descripcion = $data['descripcion'];
        $signo->save();
        return redirect()->route('SignosIndex')->with('message', '¡Se agregó el nuevo signo con éxito!');
    }

    public function editar($id){
        return view("app.administrador.signos.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}