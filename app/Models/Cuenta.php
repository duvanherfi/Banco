<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'saldo',
        'activo',
        'propia',
        'user_id'
    ];

    public function transferencias()
    {
        return $this->hasMany(Transferencia::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
