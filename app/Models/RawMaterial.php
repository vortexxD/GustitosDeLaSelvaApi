<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RawMaterial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'raw_material';

    protected $fillable = [
        'name',
        'unit_price'
    ];

    protected $messages = [
        'name.required' => 'El nombre es requerido.'
    ];
}
