<?php

namespace App\Http\Controllers\Medico\GenerarDiagnostico;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Diagnostico;

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
        return view("app.medico.diagnosticos.registrar");
    }

    public function agregar(Request $request){
        
    }

    public function editar($id){
        return view("app.medico.diagnosticos.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}