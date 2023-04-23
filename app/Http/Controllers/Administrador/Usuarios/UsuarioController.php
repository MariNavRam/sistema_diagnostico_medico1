<?php

namespace App\Http\Controllers\Administrador\Usuarios;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsuarioController extends Controller{

    public function index(Request $request){
        if($request->user()->tipo == 'admin'){
            $usuarios = User::all();
            return view("app.administrador.usuarios.index",["usuarios"=>$usuarios]);
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
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