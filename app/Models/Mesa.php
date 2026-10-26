<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{

    public function aula() 
    {
        return $this->belongsTo(Aula::class);
        
    }

    use HasFactory;
}
