<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    public function index()
    {
        $barang = Barang::query()
            ->leftJoin('barang_masuks', 'barang_masuks.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('barang_keluars', 'barang_keluars.kd_barang', '=', 'barangs.kd_barang')
            ->select(
                'barangs.kd_barang',
                'barangs.stok',
                'barangs.nama_brg',
                DB::raw('COALESCE(SUM(barang_masuks.brg_masuk), 0) as total_masuk'),
                DB::raw('COALESCE(SUM(barang_keluars.brg_keluar), 0) as total_keluar'),
                DB::raw('MAX(barang_masuks.created_at) as latest_created_at')
            )
            ->groupBy('barangs.kd_barang', 'barangs.nama_brg')
            ->orderBy('latest_created_at', 'desc')
            ->get();

        return view("page.laporan.stok.index", compact("barang"));
    }
    public function pdf(Request $request)
    {
        $barang = Barang::query()
            ->leftJoin('barang_masuks', 'barang_masuks.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('barang_keluars', 'barang_keluars.kd_barang', '=', 'barangs.kd_barang')
            ->select(
                'barangs.kd_barang',
                'barangs.stok',
                'barangs.nama_brg',
                DB::raw('COALESCE(SUM(barang_masuks.brg_masuk), 0) as total_masuk'),
                DB::raw('COALESCE(SUM(barang_keluars.brg_keluar), 0) as total_keluar'),
                DB::raw('MAX(barang_masuks.created_at) as latest_created_at')
            )
            ->groupBy('barangs.kd_barang', 'barangs.nama_brg')
            ->orderBy('latest_created_at', 'desc')
            ->get();
        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('page.laporan.stok.pdf', compact("barang", "request"));
            return $pdf->stream(date('Y-m-d') . '_stok.pdf');
        }
        // return view("page.laporan.stok.pdf", compact("datas", "request"));
    }
}
