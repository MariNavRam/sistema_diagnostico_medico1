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
        $user->password = bcrypt($data['password']);
        $user->save();
        return redirect()->route('UsuariosIndex')->with('message', '¡Se agregó el nuevo usuario con éxito!');
    }

    public function editar($id){

        $user = User::find(Crypt::decrypt($id));

        return view("app.administrador.usuarios.editar",
        [
            "user" => $user
        ]);

    } 

    public function actualizar(Request $request){

        $data = $request->all();
       //dd($data);
        //($data[$id]);
        $user = User::find($data["id"]);
        $user->name = $data['nombre'];
        $user->email = $data["correo"];
        $user->tipo = $data["tipo"];
        //$user->password = $data["password"];

        $user->save();
        return redirect()->route('UsuariosIndex')->with('message', '¡Se editó el usuario con éxito!');


    }

    public function eliminar($id){
        $user = User::find(Crypt::decrypt($id));
        $user->delete($id);
        return redirect()->route('UsuariosIndex')->with('message', '¡Se eliminó el usuario con éxito!');


    }
}