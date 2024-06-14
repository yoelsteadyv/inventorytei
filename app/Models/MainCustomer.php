<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCustomer extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_customer',
        'pt_customer',
        'alamat',
        'telp',
        'email',
        'person'
    ];
}
