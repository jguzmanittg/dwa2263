<?php

namespace App\Policies;

use App\Models\Mesa;
use App\Models\Usuario;

class MesaPolicy
{

    public function viewAny(Usuario $usuario): bool //listar
    {
        if ($usuario->tipo == 'Almacen' || $usuario->tipo == 'Admin' || $usuario->tipo == 'Horarios' )
            return true;
        else
            return false;
    }

    public function create(Usuario $usuario){
        return ($usuario->tipo == 'Almacen') || ($usuario->tipo == 'Admin');
    }


    public function delete(Usuario $usuario, Mesa $mesa){
        if($usuario->tipo == 'Almacen'){
            return TRUE;
        }else{
            if ($mesa->aula->nombre != "almacen") 
                return TRUE;
            else 
                return FALSE;
        }

    }
}
