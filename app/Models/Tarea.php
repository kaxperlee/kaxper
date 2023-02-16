<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    //Realcion uno a muchos
    public function agendaDestinatario(){
        return $this->belongsTo(AgendaDestinatario::class);
    }

    //Relacion uno a muchos
    public function agendaTipo(){
        return $this->belongsTo(AgendaTipo::class);
    }

    //Relacion uno a muchos
    public function fecha(){
        return $this->belongsTo(Fecha::class);
    }
}
