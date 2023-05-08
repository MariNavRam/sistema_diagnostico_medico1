<?php

namespace App\Http\Controllers\Recepcionista\RegistrarPaciente;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Paciente;

class RegistrarPacienteController extends Controller{

    public function index(Request $request){
        $pacientes = Paciente::all();
        return view("app.recepcionista.pacientes.index",["pacientes"=>$pacientes]);
    }

    public function registrar(){
        return view("app.recepcionista.pacientes.registrar");
    }

    public function agregar(Request $request){
        $data = $request->all();
        $paciente = new Paciente();
        $paciente->nombre = $data['nombre'];
        $paciente->apellido_paterno = $data['apellido_paterno'];
        $paciente->apellido_materno = $data['apellido_materno'];
        $paciente->direccion = $data['direccion'];
        $paciente->telefono = $data['telefono'];
        $paciente->save();
        return redirect()->route('PacientesIndex')->with('message', '¡Se agregó el nuevo usuario con éxito!');
    }

    public function editar($id){
        $paciente= Paciente::find(Crypt::decrypt($id));
        //dd($id);

        return view("app.recepcionista.pacientes.editar",

        
        [
         "id" => $paciente->id,  

       "nombre" => $paciente->nombre,
       "apellido_paterno" => $paciente->apellido_paterno,
       "apellido_materno" => $paciente->apellido_materno,
       "direccion" => $paciente->direccion,
       "telefono" => $paciente->telefono,
        
        ]);
    }

    public function actualizar(Request $request){
        $data = $request->all();

        $paciente=Paciente::find($data["id"]);
        $paciente->id=$data["id"];
        $paciente->nombre = $data["nombre"];
        $paciente->apellido_paterno = $data["apellido_paterno"];
        $paciente->apellido_materno = $data["apellido_materno"];
        $paciente->direccion = $data["direccion"];
        $paciente->telefono = $data["telefono"];
        $paciente->save();
        return redirect()->route('PacientesIndex')->with('message', '¡Se actualizó el usuario con éxito!');


    }

    public function eliminar($id){
        $paciente=Paciente::find(Crypt::decrypt($id));
        $paciente->delete($id);
        return redirect()->route('PacientesIndex')->with('message', '¡Se eliminó el usuario con éxito!');


    }
}