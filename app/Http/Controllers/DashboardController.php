<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\MainCustomer;
use App\Models\MainSupplier;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'user' => User::count(),
            'barang' => Barang::count(),
            'customer' => MainCustomer::count(),
            'supplier' => MainSupplier::count(),
            'barangmasuk' => BarangMasuk::sum('brg_masuk'),
            'barangkeluar' => BarangKeluar::sum('brg_keluar'),
            'isActive' => 'active'
        ];
        return view("page.dashboard", $data);
    }
}
