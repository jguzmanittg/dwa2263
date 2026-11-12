<?php

namespace App\Http\Controllers;

use App\Mail\CorreoBienvenida;
use App\Models\Usuario;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\isNull;

class PuertaController extends Controller
{
    public function logout(){
        Auth::logout();
        return view('sistema.login');
    }
    public function registro(){
        return view('sistema.registro');
    }
    
    public function login(){
        return view('sistema.login');
    }
    public function agregar(Request $request){
        $nuevo = new Usuario();
        $nuevo->nombre = $request->nombre;
        $nuevo->clave = Hash::make($request->clave);
        $nuevo->control = $request->control;
        $nuevo->correo = $request->correo;

        try{
            $nuevo->save();
        }catch(Exception $e){
            return redirect()->back()->withInput()->with('mensaje','No pudimos agregar');
        }

        Mail::to($nuevo->correo)->send(new CorreoBienvenida($nuevo));

        Auth::login($nuevo);
        return view('sistema.plantilla');
        


    }
    public function autenticar(Request $request){
        $encontrado = Usuario::query()->where('control',$request->input('control'))->first();
        if(is_null($encontrado))
        {
            //return "nadie";
            return redirect()->back()->withInput()->with('mensaje','USUARIO NO ENCONTRADO');
        }else{
            if(Hash::check($request->input('clave'), $encontrado->clave )){
                //return "bienvenido";
                
                Log::channel('bitacora')->warning("$encontrado->nombre entró en el sistema -  " . Carbon::now());
                Auth::login($encontrado);

                return view('sistema.plantilla');
            }else{
                return redirect()->back()->withInput()->with('mensaje','REVISE LA CONTRASEÑA');
            }
        }

        
    }
}
