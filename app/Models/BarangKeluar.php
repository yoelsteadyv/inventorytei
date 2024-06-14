<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_brg_keluar',
        'tgl_keluar',
        'kd_barang',
        'kd_customer',
        'brg_keluar'
    ];
}
