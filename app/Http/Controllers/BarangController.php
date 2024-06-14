<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $jenis_brg = Jenis::query()->latest()->get();
        $satuan_brg = Satuan::query()->latest()->get();
        $barang = Barang::query()
            ->join('jenis', 'barangs.id_jenis', '=', 'jenis.id_jenis')
            ->join('satuans', 'barangs.id_satuan', '=', 'satuans.id_satuan')
            ->latest('barangs.created_at')
            ->get(['barangs.*', 'jenis.jenis_brg', 'satuans.satuan_brg', 'barangs.kd_barang']);

        // dd($barang);
        return view("page.masterbarang.barang.index", compact("barang", "jenis_brg", "satuan_brg"));
    }

    public function store(Request $request)
    {
        $barang = [
            'kd_barang' => $request->input('kd_barang'),
            'nama_brg' => $request->input('nama_brg'),
            'id_jenis' => $request->input('id_jenis'),
            'id_satuan' => $request->input('id_satuan'),
        ];
        Barang::create($barang);
        return redirect('/barang')->with('success', 'Berhasil simpan data');
    }

    public function update(Request $request,  $id)
    {
        $barang = [
            'kd_barang' => $request->input('kd_barang'),
            'nama_brg' => $request->input('nama_brg'),
            'id_jenis' => $request->input('id_jenis'),
            'id_satuan' => $request->input('id_satuan'),
        ];
        // dd($barang);
        Barang::where('id', $id)->update($barang);
        return redirect('/barang')->with('success', 'Berhasil simpan perubahan data');
    }

    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect('/barang')->with('success', 'data berhasil didelete');
    }
}
