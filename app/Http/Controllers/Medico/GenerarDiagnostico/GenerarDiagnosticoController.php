<?php

namespace App\Http\Controllers\Medico\GenerarDiagnostico;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Diagnostico;
use App\Models\Cita;
use App\Models\User;
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

    public function registrar(Request $request){
        if($request->user()->tipo == 'admin' OR $request->user()->tipo == 'medico'){
            $usuario = User::where('name',$request->user()->name)->first();
            //dd($usuario);
            if($usuario->tipo == 'admin'){
                $citas = Cita::all()->sortBy('fecha');
            }
            else{
                $citas = Cita::where('medico_id', $usuario->id)->get();
            }
            $signos = Signo::All()->sortBy('nombre');
            $sintomas = Sintoma::All()->sortBy('nombre');
            $pruebas_de_laboratorio = PruebaDeLaboratorio::all()->sortBy('nombre');
            return view("app.medico.diagnosticos.registrar", 
                        ["citas"=>$citas,
                        "signos"=>$signos,
                        "sintomas"=>$sintomas,
                        "pruebas_de_laboratorio"=>$pruebas_de_laboratorio]);
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
    }

    public function agregar(Request $request){
        $datos = $request->all();
        //dd($datos);
        $signos_ids = json_decode($datos["signos_ids"]);
        $sintomas_ids = json_decode($datos["sintomas_ids"]);
        $pruebas_ids = json_decode($datos["pruebas_ids"]);
        $cita = Cita::find($datos["cita"]);
        
        $posibles_enfermedades = array();
        if($signos_ids != null){
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
        }
       
        if($sintomas_ids != null){
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
        }
        
        if($pruebas_ids != null){
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
        }
        //dd($posibles_enfermedades);
        if(count($posibles_enfermedades) == 0){
            return view("app.medico.diagnosticos.consulta",["cita"=>$cita,"enfermedad"=>null,"tratamientos"=>null]);
        }
       
        $valores = array_count_values($posibles_enfermedades); 
        $primer_valor = array_values($valores)[0];
        $numero_actual = $primer_valor;
        $todos_tienen_el_mismo_valor = 0;
        if(count($valores) > 1){
            $todos_tienen_el_mismo_valor = 1;
            foreach($valores as $valor){
                if($valor != $numero_actual){
                    $todos_tienen_el_mismo_valor = 0;
                }
            }
        }
        if($todos_tienen_el_mismo_valor == 1){
            return view("app.medico.diagnosticos.consulta",["cita"=>$cita,"enfermedad"=>null,"tratamientos"=>null]);
        }
        
        $moda = array_search(max($valores), $valores);

        if($moda == 0){
            return view("app.medico.diagnosticos.consulta",["cita"=>$cita,"enfermedad"=>null,"tratamientos"=>null]);
        }
        else{
            $enfermedad = Enfermedad::find($moda);
            $tratamientos = TratamientoEnfermedad::where('enfermedad_id',$enfermedad->id)->get();
            $diagnostico = new Diagnostico();
            $diagnostico->id_enfermedad = $enfermedad->id;
            $diagnostico->id_cita = $cita->id;
            $diagnostico->save();
            return view("app.medico.diagnosticos.consulta",["cita"=>$cita,"enfermedad"=>$enfermedad,"tratamientos"=>$tratamientos]);
        }
    }

    public function editar($id){
        return view("app.medico.diagnosticos.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){
        $diagnostico=Diagnostico::find(Crypt::decrypt($id));
        $diagnostico->delete($id);
        return redirect()->route('DiagnosticosIndex');
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