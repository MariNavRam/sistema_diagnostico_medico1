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
        $sintoma= Sintoma::find(Crypt::decrypt($id));

        return view("app.administrador.sintomas.editar",[
            "id" => $sintoma->id,
            "sintoma" => $sintoma->nombre,

        ]);
    }

    public function actualizar(Request $request){
        $data=$request->all();
        $sintoma= Sintoma::find($data["id"]);
        $sintoma->nombre = $data["sintoma"];

        $sintoma->save();
        return redirect()->route('SintomasIndex')->with('message', '¡Se editó el síntoma con éxito!');

    }

    public function eliminar($id){
        $sintoma= Sintoma::find(Crypt::decrypt($id));
        $sintoma->delete($id);
        return redirect()->route('SintomasIndex')->with('message', '¡Se eliminó el síntoma con éxito!');

    }
}