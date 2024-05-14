<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'order_details';

    protected $fillable = [
        'ID_Order',
        'ID_Product',
        'amount',
        'unit_price',
        'subtotal'
    ];

    protected $messages = [
        'ID_Order.required' => 'El pedido es requerido.',
        'ID_Product.required' => 'El producto es requerido.',
        'amount.required' => 'La cantidad es requerida.',
        'unit_price.required' => 'El precio es requerido.'
    ];

    public function order() {
        return $this->belongsTo(Order::class, 'ID_Order');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'ID_Product');
    }
}
