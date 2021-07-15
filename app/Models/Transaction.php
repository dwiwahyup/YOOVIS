<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'type',
        'kerusakan_id',
        'tanggal',
        'waktu',
        'alamat',
        'promo',
    ];

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class);
    }

    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }
}
