<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaDestinatario extends Model
{
    use HasFactory;

    public function tareas(){
        return $this->hasMany(Tarea::class);
    }
}
