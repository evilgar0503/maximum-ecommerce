<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MetodoEnvio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'metodo_envio';

    protected $fillable = [
        'nombre',
        'cargo'
    ];
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido');
    }
}
