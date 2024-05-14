<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'phone',
        'address'
    ];

    protected $messages = [
        'phone.required' => 'El telefono del cliente es requerido.'
    ];

    public function orders() {
        return $this->hasMany(Order::class, 'ID_Customer');
    }
}
