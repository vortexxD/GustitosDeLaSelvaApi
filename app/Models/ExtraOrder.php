<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExtraOrder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'extra_orders';

    protected $fillable = [
        'ID_Order',
        'ID_Raw_Material',
        'amount'
    ];

    protected $messages = [
        'ID_Order.required' => 'El pedido es requerido.',
        'ID_Raw_Material.required' => 'La materia prima es requerida.',
        'amount.required' => 'La cantidad es requerida.'
    ];
}
