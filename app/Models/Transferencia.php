<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'monto',
        'cuenta_origen_id',
        'cuenta_destino_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cuenta_origen()
    {
        return $this->belongsTo(Cuenta::class, 'cuenta_origen_id');
    }

    public function cuenta_destino()
    {
        return $this->belongsTo(Cuenta::class, 'cuenta_destino_id');
    }
}
