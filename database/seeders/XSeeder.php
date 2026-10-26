<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aula = new Aula();
        $aula->nombre="X1";
        $aula->capacidad=10;
        $aula->wifi=false;
        $aula->save();

        $aula = new Aula();
        $aula->nombre="X2";
        $aula->capacidad=10;
        $aula->wifi=false;
        $aula->save();
    }
}
