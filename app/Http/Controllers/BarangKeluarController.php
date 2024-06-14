<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\MainCustomer;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barang = Barang::query()
            ->join('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->join('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->get(['barangs.kd_barang', 'barangs.nama_brg', 'jenis.jenis_brg', 'satuans.satuan_brg']);

        $customer = MainCustomer::query()->latest()->get();
        $barang_keluar = BarangKeluar::query()
            ->leftJoin('barangs', 'barang_keluars.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('main_customers', 'barang_keluars.kd_customer', '=', 'main_customers.kd_customer')
            ->leftJoin('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->leftJoin('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->latest('barang_keluars.created_at')
            ->get();
        // dd($barang);
        return view("page.barangkeluar.index", compact("barang_keluar", "barang", "customer"));
    }
    public function tambah()
    {
        $barang = Barang::query()
            ->join('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->join('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->get(['barangs.kd_barang', 'barangs.nama_brg', 'jenis.jenis_brg', 'satuans.satuan_brg']);

        $customer = MainCustomer::query()->latest()->get();
        $barang_keluar = BarangKeluar::query()
            ->leftJoin('barangs', 'barang_keluars.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('main_customers', 'barang_keluars.kd_customer', '=', 'main_customers.kd_customer')
            ->latest('barang_keluars.created_at')
            ->get();

        return view("page.barangkeluar.tambah", compact("barang_keluar", "barang", "customer"));
    }
    public function store(Request $request)
    {

        $barang = [
            'kd_brg_keluar' => $request->input('kd_brg_keluar'),
            'tgl_keluar' => $request->input('tgl_keluar'),
            'kd_customer' => $request->input('kd_customer'),
            'kd_barang' => $request->input('kd_barang'),
            'brg_keluar' => $request->input('brg_keluar'),
        ];
        // dd($barang);
        BarangKeluar::create($barang);

        // Kurangi stok barang
        $barang = Barang::where('kd_barang', $request->kd_barang)->first();
        if ($barang) {
            $barang->stok -= $request->brg_keluar;
            $barang->save();
        }

        return redirect('/barangkeluar')->with('success', 'Barang keluar berhasil ditambahkan');
    }
    public function update(Request $request, $kd_brg_keluar)
    {
        // Mencari data barang keluar berdasarkan kd_brg_keluar
        $barangkeluar = BarangKeluar::where('kd_brg_keluar', $kd_brg_keluar)->first();

        // Jika data tidak ditemukan, redirect ke halaman /barangkeluar dengan pesan error
        if (!$barangkeluar) {
            return redirect('/barangkeluar')->with('error', 'Data tidak ditemukan');
        }

        // Simpan data lama untuk perhitungan selisih
        $oldQuantity = $barangkeluar->brg_keluar;

        // Mengupdate data barang keluar dengan data yang diterima dari request
        $barangkeluar->update($request->all());

        // Hitung selisih dan update stok barang
        $newQuantity = $request->brg_keluar;
        $difference = $newQuantity - $oldQuantity;

        $barang = Barang::where('kd_barang', $request->kd_barang)->first();
        if ($barang) {
            $barang->stok -= $difference;
            $barang->save();
        }

        // Redirect ke halaman /barangkeluar dengan pesan sukses
        return redirect('/barangkeluar')->with('success', 'Berhasil simpan perubahan data');
    }

    public function destroy($kd_brg_keluar)
    {
        $barangkeluar = BarangKeluar::where('kd_brg_keluar', $kd_brg_keluar)->first();

        if (!$barangkeluar) {
            return redirect('/barangkeluar')->with('error', 'Data tidak ditemukan');
        }

        $quantity = $barangkeluar->brg_keluar;

        $barangkeluar->delete();

        // Kembalikan stok barang
        $barang = Barang::where('kd_barang', $barangkeluar->kd_barang)->first();
        if ($barang) {
            $barang->stok += $quantity;
            $barang->save();
        }

        return redirect('/barangkeluar')->with('success', 'Data berhasil dihapus');
    }
}
