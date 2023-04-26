<?php

namespace App\Http\Controllers\Medico\GenerarDiagnostico;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Diagnostico;
use App\Models\Paciente;
use App\Models\Signo;
use App\Models\Sintoma;
use App\Models\PruebaDeLaboratorio;

class GenerarDiagnosticoController extends Controller{

    public function index(Request $request){
        if($request->user()->tipo == 'admin' OR $request->user()->tipo == 'medico'){
            $diagnosticos = Diagnostico::all();
            return view("app.medico.diagnosticos.index", ["diagnosticos"=>$diagnosticos]);
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }     
    }

    public function registrar(){
        $pacientes = Paciente::all();
        $signos = Signo::All();
        $sintomas = Sintoma::All();
        $pruebas_de_laboratorio = PruebaDeLaboratorio::all();
        return view("app.medico.diagnosticos.registrar", 
                        ["pacientes"=>$pacientes,
                        "signos"=>$signos,
                        "sintomas"=>$sintomas,
                        "pruebas_de_laboratorio"=>$pruebas_de_laboratorio]);
    }

    public function agregar(Request $request){
        $datos = $request->all();
        dd($datos);
    }

    public function editar($id){
        return view("app.medico.diagnosticos.editar");
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
        return view("app.medico.diagnosticos.ajax.signos_table",["signos"=>$signos]);
    }

    public function add_sintoma_a_tabla(){
        $sintomas_id = json_decode($_GET["sintomas"]);
        $sintomas = array();
        foreach($sintomas_id as $sintoma_id){
            $sintoma = Sintoma::where('id',$sintoma_id)->first();
            array_push($sintomas,$sintoma);
        }
        return view("app.medico.diagnosticos.ajax.sintomas_table",["sintomas"=>$sintomas]);
    }

    public function add_prueba_a_tabla(){
        $pruebas_id = json_decode($_GET["pruebas"]);
        $pruebas = array();
        foreach($pruebas_id as $prueba_id){
            $prueba = PruebaDeLaboratorio::where('id',$prueba_id)->first();
            array_push($pruebas,$prueba);
        }
        return view("app.medico.diagnosticos.ajax.pruebas_de_laboratorio",["pruebas"=>$pruebas]);
    }

    
}