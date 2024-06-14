<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_barang';
    protected $fillable = [
        'kd_barang',
        'nama_brg',
        'id_jenis',
        'id_satuan',
        'stok'
    ];
}
