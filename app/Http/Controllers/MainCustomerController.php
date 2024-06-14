<?php

namespace App\Http\Controllers;

use App\Models\MainCustomer;
use Illuminate\Http\Request;

class MainCustomerController extends Controller
{
    public function index()
    {
        $main_customer = MainCustomer::query()->latest()->get();
        // dd($barang);
        return view("page.maincustomer.index", compact("main_customer"));
    }
    public function store(Request $request)
    {
        $main_customer = [
            'kd_customer' => $request->input('kd_customer'),
            'pt_customer' => $request->input('pt_customer'),
            'telp' => $request->input('telp'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'person' => $request->input('person'),
        ];
        MainCustomer::create($main_customer);
        return redirect('/maincustomer')->with('success', 'Berhasil simpan data');
    }
    public function update(Request $request, $id)
    {
        $main_customer = [
            'kd_customer' => $request->input('kd_customer'),
            'pt_customer' => $request->input('pt_customer'),
            'telp' => $request->input('telp'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'person' => $request->input('person'),
        ];
        MainCustomer::where('id', $id)->update($main_customer);
        return redirect('maincustomer')->with('success', 'data berhasil di update');
    }
    public function destroy($id)
    {
        MainCustomer::destroy($id);
        return redirect('maincustomer')->with('success', 'Data berhasil dihapus');
    }
}
