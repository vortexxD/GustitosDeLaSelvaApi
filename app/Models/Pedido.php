<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function cliente() {
        return $this->belongsTo('App\Cliente', 'ID_Cliente');
    }

    public function detallesPedido() {
        return $this->hasMany('App\DetallePedido', 'ID_Pedido');
    }

    public function factura() {
        return $this->hasOne('App\Factura', 'ID_Pedido');
    }
}
