<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function producto_base() {
        return $this->belongsTo('App\ProductoBase');
    }

    public function pedidosProducto() {
        return $this->belongsToMany(Pedido::class, 'productos_pedido');
    }
}
