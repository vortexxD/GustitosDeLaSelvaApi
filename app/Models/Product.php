<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'type'
    ];

    protected $messages = [
        'name.required' => 'El nombre es requerido.',
        'price.required' => 'El precio es requerido.',
        'type.required' => 'El tipo es requerido.'
    ];
}
