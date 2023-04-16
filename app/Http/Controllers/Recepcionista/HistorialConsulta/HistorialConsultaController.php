<?php

namespace App\Http\Controllers\Recepcionista\HistorialConsulta;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class HistorialConsultaController extends Controller{

    public function index(){
        //dd("Index de registrar consulta");
    	return view("app.recepcionista.historiales_de_consulta.index");
    }

    public function registrar(){
        return view("app.recepcionista.historiales_de_consulta.registrar");
    }

    public function agregar(Request $request){
        
    }

    public function editar($id){
        return view("app.recepcionista.historiales_de_consulta.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}