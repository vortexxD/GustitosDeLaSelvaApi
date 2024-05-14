<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orders';

    protected $fillable = [
        'ID_Customer',
        'date_time',
        'status',
        'type',
        'ID_Table',
        'total_amount'
    ];

    protected $messages = [
        'ID_Customer.required' => 'El cliente es requerido.',
        'status.required' => 'El estado es requerido.',
        'type.required' => 'El tipo es requerido.',
        'ID_Table.required' => 'El número de la mesa es requerido.'
    ];

    public function customer() {
        return $this->belongsTo(Cliente::class, 'ID_Customer');
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'ID_Order');
    }

    public function invoice() {
        return $this->hasOne(Invoice::class, 'ID_Order');
    }
}
