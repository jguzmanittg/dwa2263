<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class PuertaController extends Controller
{
    public function logout(){
        Auth::logout();
        return view('sistema.login');
    }
    public function login(){
        return view('sistema.login');
    }
    public function Autenticar(Request $request){
        $encontrado = Usuario::query()->where('control',$request->input('control'))->first();
        if(is_null($encontrado))
        {
            //return "nadie";
            return redirect()->back()->withInput()->with('mensaje','USUARIO NO ENCONTRADO');
        }else{
            if(Hash::check($request->input('clave'), $encontrado->clave )){
                //return "bienvenido";
                Auth::login($encontrado);
                return view('sistema.plantilla');
            }else{
                return redirect()->back()->withInput()->with('mensaje','REVISE LA CONTRASEÑA');
            }
        }

        
    }
}
