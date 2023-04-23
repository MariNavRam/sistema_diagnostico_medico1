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

    public function registrar(Request $request){
        if($request->user()->tipo == 'admin'){
            return view("app.administrador.usuarios.registrar");
        }
        else{
            return view("app.usuario_no_autorizado.index");
        }
        
    }

    public function agregar(Request $request){
        $data = $request->all();
        $user = new User();
        $user->name = $data['nombre'];
        $user->email = $data['correo'];
        $user->tipo = $data['tipo'];
        $user->password = bcrypt('new_password');
        $user->save();
        return redirect()->route('UsuariosIndex')->with('message', '¡Se agregó el nuevo usuario con éxito!');
    }

    public function editar($id){
        return view("app.administrador.usuarios.editar");
    }

    public function actualizar(Request $request){

    }

    public function eliminar($id){

    }
}