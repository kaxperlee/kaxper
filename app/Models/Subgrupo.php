<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subgrupo extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function subgrupo(){
        return $this->belongsTo(subgrupo::class);
    }
}
