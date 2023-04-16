<?php

namespace App\Http\Controllers\Administrador\Signos;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class SignosController extends Controller{

    public function index(){
        //dd("signos index");
    	return view("app.administrador.signos.index");
    }

    public function registrar(){
        return view("app.administrador.signos.registrar");
    }

    public function agregar(Request $request){
        
    }

    public function editar($id){
        return view("app.administrador.signos.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}