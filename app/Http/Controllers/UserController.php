<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

function insertToDatabase(Request $request, User $model){
    
    $model->Nombre = $request->nombre;
    $model->Apellido = $request->apellido;
    $model->Clave = $request->clave;
    $model->Correo = $request->correo;
    $model->LinkCV = $request->linkcv;
    $model->Biografia = $request->biografia;
 
    $model->save();
}

class UserController extends Controller
{

    public function createUser(Request $request) {

        $coincidencia = User::where('Correo', $request->correo)->get();
        
        if( count($coincidencia) == 1 ){
            return redirect('/register_error');
        } else {
            $users_bd = new User;

            insertToDatabase($request, $users_bd);
     
            return redirect('/login');
        }

    }

    public function updateUser(Request $request) {

        $users_bd = User::find($request->session()->get('id'));

        insertToDatabase($request, $users_bd);
 
        return redirect('/config');
    }

    public function deleleUser(Request $request){
        $users_bd = User::find($request->session()->get('id'));
        $users_bd->delete();
        $request->session()->invalidate();
        return redirect('/');

    }
}