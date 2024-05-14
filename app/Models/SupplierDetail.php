<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupplierDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'supplier_details';

    protected $fillable = [
        'ID_Supplier',
        'ID_Raw_Material',
        'weekly_amount',
        'weekly_total_price'
    ];

    protected $messages = [
        'ID_Proveedor.required' => 'El proveedor es requerido.',
        'ID_Materia.required' => 'La materia es requerida.',
        'cantidad_semanal.required' => 'La cantidad es requerida.'
    ];

}
