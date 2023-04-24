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
            $medicos = Medico::all();
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
        $medico = Medico::where('id',$data['medico'])->get()->first();
        $consultorio = Consultorio::where('id',$data['consultorio'])->get()->first();
        $cita = new Cita();
        $cita->fecha = $data['fecha'];
        $cita->hora = $data['hora'];
        $cita->consultorio_id = $consultorio->id;
        $cita->paciente_id = $paciente->id;
        $cita->medico_id = $medico->id;
        $cita->estado_de_cita = 'Pendiente';
        $cita->save();
        return redirect()->route('CitasIndex')->with('message', '¡Se creó la nueva cita con éxito!');
    }

    public function editar($id){
        return view("app.recepcionista.citas.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}