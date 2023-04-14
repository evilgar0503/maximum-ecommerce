<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoBase extends Model
{
    use HasFactory;
    public function valoracionesUsuarios() {
        return $this->belongsToMany(User::class, 'valoraciones');
    }
}
