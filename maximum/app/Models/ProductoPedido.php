<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoPedido extends Model
{
    use HasFactory;
    protected $table = 'productos_pedido';
    protected $fillable = ['producto_id', 'pedido_id', 'cantidad', 'precio_unidad'];

    public function producto() {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function pedido() {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }
}
