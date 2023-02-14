<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkTipo extends Model
{
    use HasFactory;

    public function links(){
        return $this->hasMany(Link::class);
    }
}
