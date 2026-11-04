<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class PuertaController extends Controller
{
    public function login(){
        return view('sistema.login');
    }
    public function Autenticar(Request $request){
        $encontrado = Usuario::query()->where('control',$request->input('control'))->first();
        if(is_null($encontrado))
        {
            return "nadie";
            //return redirect()->back();
        }else{
            if(Hash::check($request->input('clave'), $encontrado->clave )){
                return "bienvenido";
            }else{
                return "contraseña incorrecta";

            }
 
        }

        
    }
}
