<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Usuario();
        $nuevo->nombre = 'Hugo';
        $nuevo->control = '2025';
        $nuevo->clave = Hash::make('asd');
        $nuevo->tipo = 'Admin';
        $nuevo->save();

        $nuevo = new Usuario();
        $nuevo->nombre = 'Paco';
        $nuevo->control = '2026';
        $nuevo->clave = Hash::make('asd');
        $nuevo->tipo = 'Almacen';
        $nuevo->save();

        $nuevo = new Usuario();
        $nuevo->nombre = 'Luis';
        $nuevo->control = '2027';
        $nuevo->clave = Hash::make('asd');
        $nuevo->tipo = 'Horarios';
        $nuevo->save();

    }
}
