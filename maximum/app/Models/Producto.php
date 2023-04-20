<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'precio_descuento',
        'precio_empresa',
        'stock',
        'ruta_imagen'
    ];
    
    public function producto_base() {
        return $this->belongsTo('App\ProductoBase');
    }

    public function pedidosProducto() {
        return $this->belongsToMany(Pedido::class, 'productos_pedido')->withPivot('cantidad', 'precio_unidad');
    }

    public function valoracionesUsuarios() {
        return $this->belongsToMany(User::class, 'valoraciones');
    }
}
