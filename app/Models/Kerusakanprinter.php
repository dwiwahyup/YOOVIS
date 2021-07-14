<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakanprinter extends Model
{
    use HasFactory;
    protected $table = "kerusakan_printer";
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenis_kerusakan',
        'harga',
    ];
}
