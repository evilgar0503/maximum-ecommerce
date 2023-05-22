<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'cod_seguimiento', 'user_id', 'nota_cliente', 'nota_empresa', 'metodo_pago_id', 'precio_total', 'env_nombre', 'env_apellidos', 'env_dni', 'env_direccion', 'env_cp', 'env_ciudad', 'env_provincia', 'env_pais', 'metodo_envio_id', 'estado', 'fac_nombre', 'fac_apellidos', 'fac_dni', 'fac_direccion', 'fac_cp', 'fac_ciudad', 'fac_provincia', 'fac_pais'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productosPedido()
    {
        return $this->belongsToMany(Producto::class, 'productos_pedido')->withPivot('cantidad', 'precio_unidad');
    }
}
