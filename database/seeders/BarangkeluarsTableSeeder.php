<?php

namespace Database\Seeders;

use App\Models\BarangKeluar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangkeluarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed barang keluar
        // $barang_keluar_data = [
        //     ['kd_brg_keluar' => 'KBK-1234567890', 'tgl_keluar' => '2024-02-03', 'kd_barang' => 6653092154, 'kd_customer' => 'KC-2727048049', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-2345678901', 'tgl_keluar' => '2024-03-05', 'kd_barang' => 6139036777, 'kd_customer' => 'KC-6988176245', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-3456789012', 'tgl_keluar' => '2024-04-07', 'kd_barang' => 8051103770, 'kd_customer' => 'KC-7299218723', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-4567890123', 'tgl_keluar' => '2024-01-01', 'kd_barang' => 2184348634, 'kd_customer' => 'KC-3339818692', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-5678901234', 'tgl_keluar' => '2024-05-09', 'kd_barang' => 8169512944, 'kd_customer' => 'KC-2123458123', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-6789012345', 'tgl_keluar' => '2024-06-11', 'kd_barang' => 4970858169, 'kd_customer' => 'KC-9603628456', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-7890123456', 'tgl_keluar' => '2024-07-13', 'kd_barang' => 2203229743, 'kd_customer' => 'KC-1816075586', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-8901234567', 'tgl_keluar' => '2024-08-15', 'kd_barang' => 5682005709, 'kd_customer' => 'KC-3212688386', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-9012345678', 'tgl_keluar' => '2024-09-17', 'kd_barang' => 1671302031, 'kd_customer' => 'KC-4088411301', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-0123456789', 'tgl_keluar' => '2024-10-19', 'kd_barang' => 4220214495, 'kd_customer' => 'KC-2938475678', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-1234567890', 'tgl_keluar' => '2024-01-21', 'kd_barang' => 2184348634, 'kd_customer' => 'KC-3339818692', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-2345678901', 'tgl_keluar' => '2024-02-23', 'kd_barang' => 6653092154, 'kd_customer' => 'KC-2727048049', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-3456789012', 'tgl_keluar' => '2024-03-25', 'kd_barang' => 6139036777, 'kd_customer' => 'KC-6988176245', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-4567890123', 'tgl_keluar' => '2024-04-27', 'kd_barang' => 8051103770, 'kd_customer' => 'KC-7299218723', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-5678901234', 'tgl_keluar' => '2024-05-29', 'kd_barang' => 8169512944, 'kd_customer' => 'KC-2123458123', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-6789012345', 'tgl_keluar' => '2024-06-01', 'kd_barang' => 4970858169, 'kd_customer' => 'KC-9603628456', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-7890123456', 'tgl_keluar' => '2024-07-03', 'kd_barang' => 2203229743, 'kd_customer' => 'KC-1816075586', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-8901234567', 'tgl_keluar' => '2024-08-05', 'kd_barang' => 5682005709, 'kd_customer' => 'KC-3212688386', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-9012345678', 'tgl_keluar' => '2024-09-07', 'kd_barang' => 1671302031, 'kd_customer' => 'KC-4088411301', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-0123456789', 'tgl_keluar' => '2024-10-09', 'kd_barang' => 4220214495, 'kd_customer' => 'KC-2938475678', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-1234567890', 'tgl_keluar' => '2024-01-11', 'kd_barang' => 2184348634, 'kd_customer' => 'KC-3339818692', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-2345678901', 'tgl_keluar' => '2024-02-13', 'kd_barang' => 6653092154, 'kd_customer' => 'KC-2727048049', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-3456789012', 'tgl_keluar' => '2024-03-15', 'kd_barang' => 6139036777, 'kd_customer' => 'KC-6988176245', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-4567890123', 'tgl_keluar' => '2024-04-17', 'kd_barang' => 8051103770, 'kd_customer' => 'KC-7299218723', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-5678901234', 'tgl_keluar' => '2024-05-19', 'kd_barang' => 8169512944, 'kd_customer' => 'KC-2123458123', 'brg_keluar' => rand(50, 200)],
        // ];

        // // Simpan data ke database menggunakan model BarangKeluar
        // foreach ($barang_keluar_data as $bk) {
        //     BarangKeluar::create($bk);
        // }
    }
}
