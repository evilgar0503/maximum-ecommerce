<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;
    protected $table = 'valoraciones';
    protected $fillable = [
        'user_id',
        'producto_id',
        'titulo',
        'valoracion',
        'comentario',
    ];

    //No se asignan valores masivamente a los atributos añadidos en $guarded
    protected $guarded = [
        'id',
    ];


    public function own() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
