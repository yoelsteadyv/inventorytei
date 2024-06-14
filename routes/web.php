<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LapBarangKeluarController;
use App\Http\Controllers\LapBarangMasukController;
use App\Http\Controllers\MainCustomerController;
use App\Http\Controllers\MainSupplierController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// auth
Route::middleware(["guest"])->group(function () {
    Route::get("/", [AuthController::class, "index"])->name("login");
    Route::post("/", [AuthController::class, "login"]);
});
Route::get("/logout", [AuthController::class, "logout"]);
Route::middleware("auth")->group(function () {

    Route::get('/dashboard', [DashboardController::class, "index"]);
});

// user
Route::get('/user', function () {
    if (Auth::user()->role == 'marketing' || Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(UserController::class)->index();
});
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

// jenis_barang
Route::get('/jenisbarang', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(JenisController::class)->index();
});
Route::post('/jenisbarang', [JenisController::class, 'store']);
Route::put('/jenisbarang/{id_jenis}', [JenisController::class, 'update']);
Route::delete('/jenisbarang/{id_jenis}', [JenisController::class, 'destroy']);

// satuan_barang
Route::get('/satuanbarang', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(SatuanController::class)->index();
});
Route::post('/satuanbarang', [SatuanController::class, 'store']);
Route::put('/satuanbarang/{id}', [SatuanController::class, 'update']);
Route::delete('/satuanbarang/{id}', [SatuanController::class, 'destroy']);

// barang
Route::get('/barang', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(BarangController::class)->index();
});
Route::post('/barang', [BarangController::class, 'store']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::delete('/barang/{id}', [BarangController::class, 'destroy']);

// mainsupplier
Route::get('/mainsupplier', function () {
    if (Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(MainSupplierController::class)->index();
});
Route::post('/mainsupplier', [MainSupplierController::class, 'store']);
Route::put('/mainsupplier/{id}', [MainSupplierController::class, 'update']);
Route::delete('/mainsupplier/{id}', [MainSupplierController::class, 'destroy']);

// maincustomer
Route::get('/maincustomer', function () {
    if (Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(MainCustomerController::class)->index();
});
Route::post('/maincustomer', [MainCustomerController::class, 'store']);
Route::put('/maincustomer/{id}', [MainCustomerController::class, 'update']);
Route::delete('/maincustomer/{id}', [MainCustomerController::class, 'destroy']);

// maincustomer
Route::get('/barangmasuk', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(BarangMasukController::class)->index();
});
Route::get('/barangmasuk/tambah', [BarangMasukController::class, 'tambah']);
Route::post('/barangmasuk', [BarangMasukController::class, 'store']);
Route::put('/barangmasuk/{id}', [BarangMasukController::class, 'update']);
Route::delete('/barangmasuk/{id}', [BarangMasukController::class, 'destroy']);

// barangkeluar
Route::get('/barangkeluar', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(BarangKeluarController::class)->index();
});
Route::get('/barangkeluar/tambah', [BarangKeluarController::class, 'tambah']);
Route::post('/barangkeluar', [BarangKeluarController::class, 'store']);
Route::put('/barangkeluar/{id}', [BarangKeluarController::class, 'update']);
Route::delete('/barangkeluar/{id}', [BarangKeluarController::class, 'destroy']);

// lapmasuk
Route::get('/laporanmasuk', function () {
    if (Auth::user()->role == 'marketing' || Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(LapBarangMasukController::class)->index();
});
Route::get('/laporanmasuk/pdf', [LapBarangMasukController::class, 'pdf']);

// lapkeluar
Route::get('/laporankeluar', function () {
    if (Auth::user()->role == 'marketing' || Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(LapBarangKeluarController::class)->index();
});
Route::get('/laporankeluar/pdf', [LapBarangKeluarController::class, 'pdf']);

Route::get('/stok', [StokController::class, 'index']);
Route::get('/stok/pdf', [StokController::class, 'pdf']);
