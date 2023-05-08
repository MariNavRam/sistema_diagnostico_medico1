<?php

namespace App\Http\Controllers\Recepcionista\GenerarCita;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Cita;
use App\Models\Consultorio;
use App\Models\Paciente;
use App\Models\User;
use App\Models\Medico;

class GenerarCitaController extends Controller{

    public function index(){
        $citas = Cita::all();
        return view("app.recepcionista.citas.index",["citas"=>$citas]);
    }

    public function registrar(Request $request){
        if($request->user()->tipo == 'admin' OR $request->user()->tipo == 'recepcionista'){
            $consultorios = Consultorio::all();
            $pacientes = Paciente::all();
            $medicos = User::where('tipo','medico')->get();
            return view("app.recepcionista.citas.registrar",
            [
                "consultorios"=>$consultorios, 
                "pacientes"=>$pacientes,
                "medicos"=>$medicos
            ]);
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }  
    }

    public function agregar(Request $request){
        $data = $request->all();
        $paciente = Paciente::where('id',$data['paciente'])->get()->first();
        $medico = User::where('id',$data['medico'])->get()->first();
        $consultorio = Consultorio::where('id',$data['consultorio'])->get()->first();
        $cita = new Cita();
        $cita->fecha = $data['fecha'];
        $cita->hora = $data['hora'];
        //$cita->consultorio_id = $consultorio->id;
        $cita->consultorio_id = $data["consultorio"];
        //$cita->paciente_id = $paciente->id;
        $cita->paciente_id = $data["paciente"];
       // $cita->medico_id = $medico->id;
        $cita->medico_id = $data["medico"];
        $cita->estado_de_cita = 'Pendiente';
        $cita->save();
        return redirect()->route('CitasIndex')->with('message', '¡Se creó la nueva cita con éxito!');
    }

    public function editar($id){
        $cita= Cita::find(Crypt::decrypt($id));
        $pacientes = Paciente::all(); 
        $consultorios = Consultorio::all(); 
        $medicos = User::where('tipo','medico')->get();
        return view("app.recepcionista.citas.editar",[
            "cita" => $cita,   
            "consultorios"=>$consultorios, 
            "pacientes"=>$pacientes,
            "medicos"=>$medicos
        ]);
    }

    public function actualizar(Request $request){
        $data = $request->all();
        //dd($data);
        $cita = Cita::find($data["id"]);
        $cita->consultorio_id = $data["consultorio"];
        $cita->paciente_id = $data["paciente"];
        $cita->medico_id = $data["medico"];
        $cita->fecha = $data["fecha"];
        $cita->hora = $data["hora"];

        $cita->save();
        return redirect()->route('CitasIndex')->with('message', '¡Se editó la cita con éxito!');
    }

    public function eliminar($id){
        $cita= Cita::find(Crypt::decrypt($id));
        //$cita->delete($id);
        $cita->estado_de_cita = 'Cancelada';
        $cita->save();
        return redirect()->route('CitasIndex')->with('message', '¡Se eliminó la cita con éxito!');
    }

    public function cambiar_estado_de_cita(){
        $cita_id = json_decode($_GET["id"]);
        $cita = Cita::where('id',$_GET["id"])->get()->first();
        if($cita != null){
            $cita->estado_de_cita = $_GET["estado"];
            $cita->save();
            return 1;
        }
        else{
            return 0;
        }
    }
}