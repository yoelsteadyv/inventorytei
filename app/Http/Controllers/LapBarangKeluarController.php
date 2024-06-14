<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LapBarangKeluarController extends Controller
{
    public function index()
    {
        // $barang = Barang::query()->latest()->get();
        // $supplier = MainSupplier::query()->latest()->get();
        $barang_keluar = BarangKeluar::query()
            ->leftJoin('barangs', 'barang_keluars.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('main_customers', 'barang_keluars.kd_customer', '=', 'main_customers.kd_customer')
            ->leftJoin('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->leftJoin('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->latest('barang_keluars.created_at')
            ->get();
        // dd($barang);
        return view("page.laporan.laporankeluar.index", compact("barang_keluar",));
    }
    public function pdf(Request $request)
    {
        $barang_keluar = BarangKeluar::query()
            ->leftJoin('barangs', 'barang_keluars.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('main_customers', 'barang_keluars.kd_customer', '=', 'main_customers.kd_customer')
            ->leftJoin('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->leftJoin('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->latest('barang_keluars.created_at')
            ->get();
        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('page.laporan.laporankeluar.pdf', compact("barang_keluar", "request"));
            return $pdf->stream('laporankeluar.pdf');
        }
        // return view("page.laporan.stok.pdf", compact("datas", "request"));
    }
}
