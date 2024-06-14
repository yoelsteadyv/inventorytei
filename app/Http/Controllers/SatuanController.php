<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        $satuan_brg = Satuan::query()->latest()->get();
        return view("page.masterbarang.satuan.index", compact("satuan_brg"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $satuan_brg = [
            'satuan_brg' => $request->input('satuan_brg'),
            'keterangan' => $request->input('keterangan'),
        ];
        Satuan::create($satuan_brg);
        return redirect('/satuanbarang')->with('success', 'Berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Satuan $satuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Satuan $satuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_satuan)
    {
        $satuan_brg = [
            'satuan_brg' => $request->input('satuan_brg'),
            'keterangan' => $request->input('keterangan'),
        ];
        Satuan::where('id_satuan', $id_satuan)->update($satuan_brg);
        // dd($id);
        return redirect('/satuanbarang')->with('success', 'berhasil menyimpan perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_satuan)
    {
        $satuan_brg = Satuan::where('id_satuan', $id_satuan);
        if ($satuan_brg) {
            $satuan_brg->delete();
            return redirect('/satuanbarang')->with('success', 'Data berhasil dihapus');
        }
        return redirect('/satuanbarang')->with('error', 'Data tidak ditemukan');
    }
}
