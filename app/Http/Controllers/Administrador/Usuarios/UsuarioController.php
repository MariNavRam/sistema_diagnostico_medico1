<?php

namespace App\Http\Controllers\Administrador\Usuarios;

//use App\ISR;
//use App\Premio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller{

    public function index(){
        //dd("registro de usuarios index");
    	return view("app.administrador.usuarios.index");
    }

    public function registrar(){
        return view("app.administrador.usuarios.registrar");
    }

    public function agregar(Request $request){
        
    }

    public function editar($id){
        return view("app.administrador.usuarios.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}