<?php

namespace Database\Seeders;

use App\Models\BarangMasuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangMasuksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed barang masuk
        // $barang_masuk_data = [
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-02-03', 'kd_barang' => 6653092154, 'kd_supplier' => 'KP-2727048049', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-03-05', 'kd_barang' => 6139036777, 'kd_supplier' => 'KP-6988176245', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-04-07', 'kd_barang' => 8051103770, 'kd_supplier' => 'KP-7299218723', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-01-01', 'kd_barang' => 2184348634, 'kd_supplier' => 'KP-3339818692', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-05-09', 'kd_barang' => 8169512944, 'kd_supplier' => 'KP-2123458123', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-06-11', 'kd_barang' => 4970858169, 'kd_supplier' => 'KP-9603628456', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-07-13', 'kd_barang' => 2203229743, 'kd_supplier' => 'KP-1816075586', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-08-15', 'kd_barang' => 5682005709, 'kd_supplier' => 'KP-3212688386', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-09-17', 'kd_barang' => 1671302031, 'kd_supplier' => 'KP-4088411301', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-10-19', 'kd_barang' => 4220214495, 'kd_supplier' => 'KP-2938475678', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-01-21', 'kd_barang' => 2184348634, 'kd_supplier' => 'KP-3339818692', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-02-23', 'kd_barang' => 6653092154, 'kd_supplier' => 'KP-2727048049', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-03-25', 'kd_barang' => 6139036777, 'kd_supplier' => 'KP-6988176245', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-04-27', 'kd_barang' => 8051103770, 'kd_supplier' => 'KP-7299218723', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-05-29', 'kd_barang' => 8169512944, 'kd_supplier' => 'KP-2123458123', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-06-01', 'kd_barang' => 4970858169, 'kd_supplier' => 'KP-9603628456', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-07-03', 'kd_barang' => 2203229743, 'kd_supplier' => 'KP-1816075586', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-08-05', 'kd_barang' => 5682005709, 'kd_supplier' => 'KP-3212688386', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-09-07', 'kd_barang' => 1671302031, 'kd_supplier' => 'KP-4088411301', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-10-09', 'kd_barang' => 4220214495, 'kd_supplier' => 'KP-2938475678', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-01-11', 'kd_barang' => 2184348634, 'kd_supplier' => 'KP-3339818692', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-02-13', 'kd_barang' => 6653092154, 'kd_supplier' => 'KP-2727048049', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-03-15', 'kd_barang' => 6139036777, 'kd_supplier' => 'KP-6988176245', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-04-17', 'kd_barang' => 8051103770, 'kd_supplier' => 'KP-7299218723', 'brg_masuk' => rand(100, 500)],
        //     ['kd_brg_masuk' => 'KBM-' . rand(1000000000, 9999999999), 'tgl_masuk' => '2024-05-19', 'kd_barang' => 8169512944, 'kd_supplier' => 'KP-2123458123', 'brg_masuk' => rand(100, 500)],
        // ];

        // foreach ($barang_masuk_data as $bm) {
        //     BarangMasuk::create($bm);
        // }
    }
}
