<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LapBarangMasukController extends Controller
{
    public function index()
    {
        // $barang = Barang::query()->latest()->get();
        // $supplier = MainSupplier::query()->latest()->get();
        $barang_masuk = BarangMasuk::query()
            ->leftJoin('barangs', 'barang_masuks.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('main_suppliers', 'barang_masuks.kd_supplier', '=', 'main_suppliers.kd_supplier')
            ->leftJoin('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->leftJoin('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->latest('barang_masuks.created_at')
            ->get();
        // dd($barang);
        return view("page.laporan.laporanmasuk.index", compact("barang_masuk",));
    }
    public function pdf(Request $request)
    {
        $barang_masuk = BarangMasuk::query()
            ->leftJoin('barangs', 'barang_masuks.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('main_suppliers', 'barang_masuks.kd_supplier', '=', 'main_suppliers.kd_supplier')
            ->leftJoin('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->leftJoin('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->latest('barang_masuks.created_at')
            ->get();
        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('page.laporan.laporanmasuk.pdf', compact("barang_masuk", "request"));
            return $pdf->stream('laporanmasuk.pdf');
        }
        // return view("page.laporan.stok.pdf", compact("datas", "request"));
    }
}
