<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    public function mesa(){
        return $this->hasOne(Mesa::class);
    }

    use HasFactory;
}
