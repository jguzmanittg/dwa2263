<?php

namespace Database\Seeders;

use App\Models\Aula;
use App\Models\Mesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nueva = new Aula;
        $nueva->nombre="C1";
        $nueva->capacidad=10;
        $nueva->wifi=true;
        $nueva->save();

        
    }
}
