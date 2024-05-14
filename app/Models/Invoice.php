<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'invoices';

    protected $fillable = [
        'ID_Order',
        'broadcast_date',
        'total',
        'status'
    ];

    protected $messages = [
        'ID_Order.required' => 'El pedido es requerido.',
        'broadcast_date.required' => 'La fecha de emisión es requerida.',
        'status.required' => 'El estado es requerido.'
    ];

    public function order() {
        return $this->belongsTo(Order::class, 'ID_Order');
    }
}
