<?php

namespace App\Policies;

use App\Models\Mesa;
use App\Models\Usuario;

class MesaPolicy
{

    public function viewAny(Usuario $usuario): bool
    {
        if ($usuario->tipo == 'Almacen')
            return true;
        else
            return false;
    }

    public function create(Usuario $usuario){
        return ($usuario->tipo == 'Almacen') || ($usuario->tipo == 'Admin');
    }

}
