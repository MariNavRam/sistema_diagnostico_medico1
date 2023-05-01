<?php

namespace App\Http\Controllers\Administrador\Enfermedades;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Enfermedad;
use App\Models\Signo;
use App\Models\Sintoma;
use App\Models\Tratamiento;
use App\Models\PruebaDeLaboratorio;
use App\Models\SignoEnfermedad;
use App\Models\SintomaEnfermedad;
use App\Models\TratamientoEnfermedad;
use App\Models\EnfermedadYPruebaDeLaboratorio;

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
            $signos = Signo::all()->sortBy('nombre');
            $sintomas = Sintoma::all()->sortBy('nombre');
            $tratamientos = Tratamiento::all()->sortBy('resultado');
            $pruebas_de_laboratorio = PruebaDeLaboratorio::all()->sortBy('nombre');
            return view("app.administrador.enfermedades.registrar",["signos"=>$signos, "sintomas"=>$sintomas, "tratamientos"=>$tratamientos, "pruebas_de_laboratorio"=>$pruebas_de_laboratorio]);
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
        
    }

    public function agregar(Request $request){
        $data = $request->all();
        //dd($data);
        $enfermedad = new Enfermedad();
        $enfermedad->nombre = $data['enfermedad'];
        $enfermedad->causa = '-';
        $enfermedad->save();
        $signos_ids = json_decode($data['signos_ids']);
        $sintomas_ids = json_decode($data['sintomas_ids']);
        $pruebas_ids = json_decode($data['pruebas_ids']);
        $tratamientos_ids = json_decode($data['tratamientos_ids']);
        foreach($signos_ids as $signo){
            $signo_enfermedad = new SignoEnfermedad();
            $signo_enfermedad->id_enfermedad = $enfermedad->id;
            $signo_enfermedad->id_signo = $signo;
            $signo_enfermedad->save();
        }
        foreach($sintomas_ids as $sintoma){
            $sintoma_enfermedad = new SintomaEnfermedad();
            $sintoma_enfermedad->id_enfermedad = $enfermedad->id;
            $sintoma_enfermedad->id_sintoma = $sintoma;
            $sintoma_enfermedad->save();
        }
        foreach($pruebas_ids as $prueba){
            $prueba_enfermedad = new EnfermedadYPruebaDeLaboratorio();
            $prueba_enfermedad->id_enfermedad = $enfermedad->id;
            $prueba_enfermedad->id_prueba_de_laboratorio = $prueba;
            $prueba_enfermedad->save();
        }
        foreach($tratamientos_ids as $tratamiento){
            $tratamiento_enfermedad = new TratamientoEnfermedad();
            $tratamiento_enfermedad->enfermedad_id = $enfermedad->id;
            $tratamiento_enfermedad->tratamiento_id = $tratamiento;
            $tratamiento_enfermedad->save();
        }
        return redirect()->route('EnfermedadesIndex')->with('message', '¡Se agregó la nueva enfermedad con éxito!');
    }

    public function editar($id){
        return view("app.administrador.enfermedades.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }

    public function add_signo_a_tabla(){
        $signos_id = json_decode($_GET["signos"]);
        $signos = array();
        foreach($signos_id as $signo_id){
            $signo = Signo::where('id',$signo_id)->first();
            array_push($signos,$signo);
        }
        return view("app.administrador.enfermedades.ajax.signos_table",["signos"=>$signos]);
    }

    public function add_sintoma_a_tabla(){
        $sintomas_id = json_decode($_GET["sintomas"]);
        $sintomas = array();
        foreach($sintomas_id as $sintoma_id){
            $sintoma = Sintoma::where('id',$sintoma_id)->first();
            array_push($sintomas,$sintoma);
        }
        return view("app.administrador.enfermedades.ajax.sintomas_table",["sintomas"=>$sintomas]);
    }

    public function add_prueba_a_tabla(){
        $pruebas_id = json_decode($_GET["pruebas"]);
        $pruebas = array();
        foreach($pruebas_id as $prueba_id){
            $prueba = PruebaDeLaboratorio::where('id',$prueba_id)->first();
            array_push($pruebas,$prueba);
        }
        return view("app.administrador.enfermedades.ajax.pruebas_de_laboratorio",["pruebas"=>$pruebas]);
    }

    public function add_tratamiento_a_tabla(){
        $tratamientos_id = json_decode($_GET["tratamientos"]);
        $tratamientos = array();
        foreach($tratamientos_id as $tratamiento_id){
            $tratamiento = Tratamiento::where('id',$tratamiento_id)->first();
            array_push($tratamientos,$tratamiento);
        }
        return view("app.administrador.enfermedades.ajax.tratamientos_table",["tratamientos"=>$tratamientos]);
    }
}