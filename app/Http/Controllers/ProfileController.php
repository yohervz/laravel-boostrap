<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use App\Models\Offer;
use Session;

class ProfileController extends Controller
{
    public function index(Request $request){
        if(Session::has("session")){
            return view('profile', ['offers' => Offer::all()]);    
        }
        return redirect()->to('/login');
    }

    public function config(Request $request){

        if(Session::has("session")){

            $bd = User::where('Correo', $request->session()->get('correo'))->get();

            return view("config", ['user' => $bd[0]]);

        }

        return redirect()->to('/login');   
    }

}
