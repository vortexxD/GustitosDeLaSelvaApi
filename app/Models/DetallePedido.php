<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    public function pedido() {
        return $this->belongsTo('App\Pedido', 'ID_Pedido');
    }

    public function producto() {
        return $this->belongsTo('App\Producto', 'ID_Producto');
    }
}
