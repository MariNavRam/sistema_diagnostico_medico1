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
use App\Models\SignoEnfermedad;
use App\Models\Sintoma;
use App\Models\SintomaEnfermedad;
use App\Models\PruebaDeLaboratorio;
use App\Models\EnfermedadYPruebaDeLaboratorio;
use App\Models\Tratamiento;
use App\Models\TratamientoEnfermedad;
use App\Models\Enfermedad;

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
        $pacientes = Paciente::all()->sortBy('nombre');
        $signos = Signo::All()->sortBy('nombre');
        $sintomas = Sintoma::All()->sortBy('nombre');
        $pruebas_de_laboratorio = PruebaDeLaboratorio::all()->sortBy('nombre');
        return view("app.medico.diagnosticos.registrar", 
                        ["pacientes"=>$pacientes,
                        "signos"=>$signos,
                        "sintomas"=>$sintomas,
                        "pruebas_de_laboratorio"=>$pruebas_de_laboratorio]);
    }

    public function agregar(Request $request){
        $datos = $request->all();
        $signos_ids = json_decode($datos["signos_ids"]);
        $sintomas_ids = json_decode($datos["sintomas_ids"]);
        $pruebas_ids = json_decode($datos["pruebas_ids"]);
        $paciente = Paciente::find($datos["paciente"]);
        
        $posibles_enfermedades = array();

        foreach($signos_ids as $signo_id){
            $signos_enfermedades = SignoEnfermedad::where('id_signo',$signo_id)->get();
            if(count($signos_enfermedades)>0){
                foreach($signos_enfermedades as $signo_enfermedad){
                    array_push($posibles_enfermedades, $signo_enfermedad->id_enfermedad);
                }   
            }
            else{
                array_push($posibles_enfermedades, 0);
            }
        }

        foreach($sintomas_ids as $sintoma_id){
            $sintomas_enfermedades = SintomaEnfermedad::where('id_sintoma',$sintoma_id)->get();
            if(count($sintomas_enfermedades)>0){
                foreach($sintomas_enfermedades as $sintoma_enfermedad){
                    array_push($posibles_enfermedades, $sintoma_enfermedad->id_enfermedad);
                }   
            }
            else{
                array_push($posibles_enfermedades, 0);
            }
        }

        foreach($pruebas_ids as $prueba_id){
            $pruebas_enfermedades = EnfermedadYPruebaDeLaboratorio::where('id_prueba_de_laboratorio',$prueba_id)->get();
            if(count($pruebas_enfermedades)>0){
                foreach($pruebas_enfermedades as $prueba_enfermedad){
                    array_push($posibles_enfermedades, $prueba_enfermedad->id_enfermedad);
                }   
            }
            else{
                array_push($posibles_enfermedades, 0);
            }
        }
        $valores = array_count_values($posibles_enfermedades); 
        $moda = array_search(max($valores), $valores);
        
        if($moda == 0){
            return view("app.medico.diagnosticos.consulta",["paciente"=>$paciente,"enfermedad"=>null,"tratamientos"=>null]);
        }
        else{
            $enfermedad = Enfermedad::find($moda);
            $tratamientos = TratamientoEnfermedad::where('enfermedad_id',$enfermedad->id)->get();
            return view("app.medico.diagnosticos.consulta",["paciente"=>$paciente,"enfermedad"=>$enfermedad,"tratamientos"=>$tratamientos]);
        }
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