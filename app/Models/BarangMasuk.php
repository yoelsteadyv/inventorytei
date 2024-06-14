<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_brg_masuk',
        'tgl_masuk',
        'kd_barang',
        'kd_supplier',
        'brg_masuk'
    ];
}
