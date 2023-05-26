<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request){
        $bd = User::where('Correo', $request->input('correo'))->get();

        if(count($bd) == 0){
            return redirect("/login_error");
        }
        
        $clave_bd = $bd[0]->Clave;
        $clave_request = $request->input('clave');
                
        if($clave_bd == $clave_request){
            session(['session' => 'true', 'correo' => $bd[0]->Correo, 'id' => $bd[0]->id]);
            return redirect()->to('/profile');
        }
        return redirect("/login_error");   

    }
}
