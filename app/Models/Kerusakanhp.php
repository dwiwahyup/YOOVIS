<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakanhp extends Model
{
    use HasFactory;
    protected $table = "kerusakan_hp";
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenis_kerusakan',
        'harga',
    ];
}
