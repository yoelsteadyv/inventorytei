<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\MainSupplier;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barang = Barang::query()
            ->join('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->join('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->get(['barangs.kd_barang', 'barangs.nama_brg', 'jenis.jenis_brg', 'satuans.satuan_brg']);
        $suppliers = MainSupplier::query()->latest()->get();
        $barang_masuk = BarangMasuk::query()
            ->leftJoin('barangs', 'barang_masuks.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('main_suppliers', 'barang_masuks.kd_supplier', '=', 'main_suppliers.kd_supplier')
            ->leftJoin('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->leftJoin('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->latest('barang_masuks.created_at')
            ->get();
        // dd($barang_masuk);
        return view("page.barangmasuk.index", compact("barang_masuk", "barang", "suppliers"));
    }
    public function tambah()
    {
        $barang = Barang::query()
            ->join('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->join('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->get(['barangs.kd_barang', 'barangs.nama_brg', 'jenis.jenis_brg', 'satuans.satuan_brg']);

        $supplier = MainSupplier::query()->latest()->get();
        $barang_masuk = BarangMasuk::query()
            ->leftJoin('barangs', 'barang_masuks.kd_barang', '=', 'barangs.kd_barang')
            ->leftJoin('main_suppliers', 'barang_masuks.kd_supplier', '=', 'main_suppliers.kd_supplier')
            ->latest('barang_masuks.created_at')
            ->get();

        return view("page.barangmasuk.tambah", compact("barang_masuk", "barang", "supplier"));
    }

    // Metode untuk menyimpan data barang masuk ke database
    public function store(Request $request)
    {
        $request->validate([
            'kd_brg_masuk' => 'required',
            'tgl_masuk' => 'required|date',
            'kd_supplier' => 'required',
            'kd_barang' => 'required',
            'brg_masuk' => 'required|numeric',
        ]);

        BarangMasuk::create([
            'kd_brg_masuk' => $request->kd_brg_masuk,
            'tgl_masuk' => $request->tgl_masuk,
            'kd_supplier' => $request->kd_supplier,
            'kd_barang' => $request->kd_barang,
            'brg_masuk' => $request->brg_masuk,
        ]);
        // Update stok barang
        $barang = Barang::where('kd_barang', $request->kd_barang)->first();
        if ($barang) {
            $barang->stok += $request->brg_masuk;
            $barang->save();
        }

        return redirect('/barangmasuk')->with('success', 'Barang masuk berhasil ditambahkan');
    }
    // public function update(Request $request,  $id)
    // {
    //     $barang = [
    //         'kd_brg_masuk' => $request->input('kd_brg_masuk'),
    //         'tgl_masuk' => $request->input('tgl_masuk'),
    //         'kd_supplier' => $request->input('kd_supplier'),
    //         'kd_barang' => $request->input('kd_barang'),
    //         'brg_masuk' => $request->input('brg_masuk'),
    //     ];
    //     // dd($barang);
    //     Barang::where('id', $id)->update($barang);
    //     return redirect('/barangmasuk')->with('success', 'Berhasil simpan perubahan data');
    // }
    public function update(Request $request, $kd_brg_masuk)
    {
        $barangMasuk = BarangMasuk::where('kd_brg_masuk', $kd_brg_masuk)->first();

        if (!$barangMasuk) {
            return redirect('/barangmasuk')->with('error', 'Data tidak ditemukan');
        }

        // Simpan data lama untuk perhitungan selisih
        $oldQuantity = $barangMasuk->brg_masuk;

        $barangMasuk->update($request->all());

        // Hitung selisih dan update stok barang
        $newQuantity = $request->brg_masuk;
        $difference = $newQuantity - $oldQuantity;

        $barang = Barang::where('kd_barang', $request->kd_barang)->first();
        if ($barang) {
            $barang->stok += $difference;
            $barang->save();
        }

        return redirect('/barangmasuk')->with('success', 'Berhasil simpan perubahan data');
    }

    public function destroy($kd_brg_masuk)
    {
        $barangMasuk = BarangMasuk::where('kd_brg_masuk', $kd_brg_masuk)->first();

        if (!$barangMasuk) {
            return redirect('/barangmasuk')->with('error', 'Data tidak ditemukan');
        }

        $quantity = $barangMasuk->brg_masuk;

        $barangMasuk->delete();

        // Kurangi stok barang
        $barang = Barang::where('kd_barang', $barangMasuk->kd_barang)->first();
        if ($barang) {
            $barang->stok -= $quantity;
            $barang->save();
        }

        return redirect('/barangmasuk')->with('success', 'Data berhasil dihapus');
    }

    // public function destroy($kd_brg_masuk)
    // {
    //     BarangMasuk::destroy($kd_brg_masuk);
    //     return redirect('/barangmasuk')->with('success', 'Data berhasil dihapus');
    // }
}
