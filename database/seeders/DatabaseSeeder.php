<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Jenis;
use App\Models\MainCustomer;
use App\Models\MainSupplier;
use App\Models\Satuan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Yoel Steady Valentino',
            'email' => 'yoelsteadyv@gmail.com',
            'role' => 'admin',
            "password" => bcrypt('123'),
        ]);
        User::factory()->create([
            'name' => 'Dianna',
            'email' => 'dianna@gmail.com',
            'role' => 'manager',
            "password" => bcrypt('123'),
        ]);
        User::factory()->create([
            'name' => 'Endang',
            'email' => 'endang@gmail.com',
            'role' => 'marketing',
            "password" => bcrypt('123'),
        ]);
        User::factory()->create([
            'name' => 'Yulius Granada',
            'email' => 'yuliusgranada@gmail.com',
            'role' => 'material',
            "password" => bcrypt('123'),
        ]);

        // // seed jenis
        Jenis::create([
            'jenis_brg' => 'BC',
            'keterangan' => '',
        ]);
        Jenis::create([
            'jenis_brg' => 'BK',
            'keterangan' => '',
        ]);
        Jenis::create([
            'jenis_brg' => 'BG',
            'keterangan' => '',
        ]);

        // seed satuan
        Satuan::create([
            'satuan_brg' => 'PACK',
            'keterangan' => '1000',
        ]);
        Satuan::create([
            'satuan_brg' => 'PCS',
            'keterangan' => '1',
        ]);
        Satuan::create([
            'satuan_brg' => 'ROLL',
            'keterangan' => '500',
        ]);


        // seed barang
        $barang = [
            [
                'kd_barang' => 2184348634,
                'nama_brg' => 'RM 13 J T N 750 OHM',
                'id_jenis' => '1',
                'id_satuan' => '2'
            ],
            [
                'kd_barang' => 6653092154,
                'nama_brg' => 'RM 06 D T N 150 K OHM',
                'id_jenis' => '1',
                'id_satuan' => '1'
            ],
            [
                'kd_barang' => 6139036777,
                'nama_brg' => 'RM 06 D T N 47 K OHM',
                'id_jenis' => '1',
                'id_satuan' => '2'
            ],
            [
                'kd_barang' => 8051103770,
                'nama_brg' => 'RD 1/2W 5(%) T-52 150 OHM',
                'id_jenis' => '1',
                'id_satuan' => '2'
            ],
            [
                'kd_barang' => 8169512944,
                'nama_brg' => 'RD 1/4WS 5(%) T-26 33K OHM',
                'id_jenis' => '1',
                'id_satuan' => '2'
            ],
            [
                'kd_barang' => 4970858169,
                'nama_brg' => 'MO 1WS 5(%) T-52 10 OHM',
                'id_jenis' => '1',
                'id_satuan' => '1'
            ],
            [
                'kd_barang' => 2203229743,
                'nama_brg' => 'RD 1/4WS 5(%) T-52 22 OHM',
                'id_jenis' => '1',
                'id_satuan' => '2'
            ],
            [
                'kd_barang' => 5682005709,
                'nama_brg' => 'RS 1WS 5% RADIAL 100 OHM',
                'id_jenis' => '1',
                'id_satuan' => '3'
            ],
            [
                'kd_barang' => 1671302031,
                'nama_brg' => 'MO 2WS 5(%) M 15MM 68K OHM',
                'id_jenis' => '1',
                'id_satuan' => '2'
            ],
            [
                'kd_barang' => 4220214495,
                'nama_brg' => 'RD 1/4WS 5(%) T-26 1K OHM',
                'id_jenis' => '1',
                'id_satuan' => '2'
            ]
        ];

        foreach ($barang as $b) {
            Barang::create($b);
        }

        // seed main supplier
        $suppliers = [
            [
                'kd_supplier' => 'KP-3339818692',
                'pt_supplier' => 'PT. United Graphics',
                'alamat' => 'Jl. Pasirkaliki No.61',
                'telp' => '(022) 6031138',
                'email' => 'unitedgraphics@gmail.com',
                'person' => 'Cakrabirawa Garang Sirait S.H.'
            ],
            [
                'kd_supplier' => 'KP-2727048049',
                'pt_supplier' => 'PT. Prisma Media',
                'alamat' => 'Jl. Diponegoro No.123',
                'telp' => '(021) 5556789',
                'email' => 'prismamedia@gmail.com',
                'person' => 'Nadia Sari Bintang'
            ],
            [
                'kd_supplier' => 'KP-6988176245',
                'pt_supplier' => 'PT. Citra Mandiri',
                'alamat' => 'Jl. Soekarno-Hatta No.45',
                'telp' => '(031) 7890123',
                'email' => 'citramandiri@gmail.com',
                'person' => 'Rizky Aditya'
            ],
            [
                'kd_supplier' => 'KP-7299218723',
                'pt_supplier' => 'PT. Mega Karya',
                'alamat' => 'Jl. Merdeka No.56',
                'telp' => '(022) 4567890',
                'email' => 'megakarya@gmail.com',
                'person' => 'Budi Santoso'
            ],
            [
                'kd_supplier' => 'KP-2123458123',
                'pt_supplier' => 'PT. Gemilang Perkasa',
                'alamat' => 'Jl. Gatot Subroto No.78',
                'telp' => '(061) 2345678',
                'email' => 'gemilangperkasa@gmail.com',
                'person' => 'Siti Nurhaliza'
            ],
            [
                'kd_supplier' => 'KP-9603628456',
                'pt_supplier' => 'PT. Harmoni Jaya',
                'alamat' => 'Jl. Ahmad Yani No.90',
                'telp' => '(024) 3456789',
                'email' => 'harmonijaya@gmail.com',
                'person' => 'Andi Wijaya'
            ],
            [
                'kd_supplier' => 'KP-1816075586',
                'pt_supplier' => 'PT. Sinar Terang',
                'alamat' => 'Jl. Pahlawan No.101',
                'telp' => '(0271) 567890',
                'email' => 'sinarterang@gmail.com',
                'person' => 'Dewi Lestari'
            ],
            [
                'kd_supplier' => 'KP-3212688386',
                'pt_supplier' => 'PT. Cahaya Timur',
                'alamat' => 'Jl. Sudirman No.102',
                'telp' => '(021) 6789012',
                'email' => 'cahayatimur@gmail.com',
                'person' => 'Rina Mariani'
            ],
            [
                'kd_supplier' => 'KP-4088411301',
                'pt_supplier' => 'PT. Nusantara Abadi',
                'alamat' => 'Jl. Imam Bonjol No.103',
                'telp' => '(022) 7890123',
                'email' => 'nusantaraabadi@gmail.com',
                'person' => 'Arif Setiawan'
            ],
            [
                'kd_supplier' => 'KP-2938475678',
                'pt_supplier' => 'PT. Inti Sejahtera',
                'alamat' => 'Jl. Diponegoro No.104',
                'telp' => '(031) 3456789',
                'email' => 'intisejahtera@gmail.com',
                'person' => 'Yudi Santoso'
            ]
        ];

        foreach ($suppliers as $s) {
            MainSupplier::create($s);
        }

        // seed main customer
        $customers = [
            [
                'kd_customer' => 'KC-4875839201',
                'pt_customer' => 'PT. Surya Jaya',
                'alamat' => 'Jl. Kenangan No.12',
                'telp' => '(021) 1234567',
                'email' => 'suryajaya@gmail.com',
                'person' => 'Aditya Nugroho'
            ],
            [
                'kd_customer' => 'KC-8745823902',
                'pt_customer' => 'PT. Harapan Baru',
                'alamat' => 'Jl. Mawar No.34',
                'telp' => '(022) 7654321',
                'email' => 'harapanbaru@gmail.com',
                'person' => 'Lestari Dewi'
            ],
            [
                'kd_customer' => 'KC-8574930283',
                'pt_customer' => 'PT. Bintang Terang',
                'alamat' => 'Jl. Melati No.56',
                'telp' => '(031) 7894561',
                'email' => 'bintangterang@gmail.com',
                'person' => 'Bambang Prasetyo'
            ],
            [
                'kd_customer' => 'KC-4839203847',
                'pt_customer' => 'PT. Citra Indah',
                'alamat' => 'Jl. Kamboja No.78',
                'telp' => '(061) 3456789',
                'email' => 'citraindah@gmail.com',
                'person' => 'Anita Permata'
            ],
            [
                'kd_customer' => 'KC-9238475620',
                'pt_customer' => 'PT. Mega Utama',
                'alamat' => 'Jl. Anggrek No.90',
                'telp' => '(024) 6789012',
                'email' => 'megautama@gmail.com',
                'person' => 'Fajar Santoso'
            ],
            [
                'kd_customer' => 'KC-3487560923',
                'pt_customer' => 'PT. Sejahtera Bersama',
                'alamat' => 'Jl. Flamboyan No.123',
                'telp' => '(0271) 2345678',
                'email' => 'sejahterabersama@gmail.com',
                'person' => 'Wulan Sari'
            ],
            [
                'kd_customer' => 'KC-5839204728',
                'pt_customer' => 'PT. Pelangi Nusantara',
                'alamat' => 'Jl. Cemara No.45',
                'telp' => '(021) 3456789',
                'email' => 'pelanginusantara@gmail.com',
                'person' => 'Rudy Hartono'
            ],
            [
                'kd_customer' => 'KC-2938475061',
                'pt_customer' => 'PT. Makmur Sentosa',
                'alamat' => 'Jl. Sakura No.67',
                'telp' => '(022) 5678901',
                'email' => 'makmursentosa@gmail.com',
                'person' => 'Indra Wijaya'
            ],
            [
                'kd_customer' => 'KC-2938475062',
                'pt_customer' => 'PT. Indah Lestari',
                'alamat' => 'Jl. Bougenville No.89',
                'telp' => '(031) 6789012',
                'email' => 'indahlestari@gmail.com',
                'person' => 'Ratna Kusuma'
            ],
            [
                'kd_customer' => 'KC-293847123',
                'pt_customer' => 'PT. Sukses Abadi',
                'alamat' => 'Jl. Teratai No.101',
                'telp' => '(061) 7890123',
                'email' => 'suksesabadi@gmail.com',
                'person' => 'Dian Anggraini'
            ]
        ];

        foreach ($customers as $c) {
            MainCustomer::create($c);
        }

        // // seed barang masuk
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
        // // Seed barang keluar
        // $barang_keluar_data = [
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-02-03', 'kd_barang' => 6653092154, 'kd_customer' => 'KC-4875839201', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-03-05', 'kd_barang' => 6139036777, 'kd_customer' => 'KC-8745823902', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-04-07', 'kd_barang' => 8051103770, 'kd_customer' => 'KC-8574930283', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-01-01', 'kd_barang' => 2184348634, 'kd_customer' => 'KC-4839203847', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-05-09', 'kd_barang' => 8169512944, 'kd_customer' => 'KC-9238475620', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-06-11', 'kd_barang' => 4970858169, 'kd_customer' => 'KC-3487560923', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-07-13', 'kd_barang' => 2203229743, 'kd_customer' => 'KC-5839204728', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-08-15', 'kd_barang' => 5682005709, 'kd_customer' => 'KC-2938475061', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-09-17', 'kd_barang' => 1671302031, 'kd_customer' => 'KC-7482658245', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-10-19', 'kd_barang' => 4220214495, 'kd_customer' => 'KC-9873592156', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-01-21', 'kd_barang' => 2184348634, 'kd_customer' => 'KC-7482658245', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-02-23', 'kd_barang' => 6653092154, 'kd_customer' => 'KC-2938475061', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-03-25', 'kd_barang' => 6139036777, 'kd_customer' => 'KC-5839204728', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-04-27', 'kd_barang' => 8051103770, 'kd_customer' => 'KC-3487560923', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-05-29', 'kd_barang' => 8169512944, 'kd_customer' => 'KC-9238475620', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-06-01', 'kd_barang' => 4970858169, 'kd_customer' => 'KC-4839203847', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-07-03', 'kd_barang' => 2203229743, 'kd_customer' => 'KC-8574930283', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-08-05', 'kd_barang' => 5682005709, 'kd_customer' => 'KC-8745823902', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-09-07', 'kd_barang' => 1671302031, 'kd_customer' => 'KC-4875839201', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-10-09', 'kd_barang' => 4220214495, 'kd_customer' => 'KC-8745823902', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-01-11', 'kd_barang' => 2184348634, 'kd_customer' => 'KC-8574930283', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-02-13', 'kd_barang' => 6653092154, 'kd_customer' => 'KC-4839203847', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-03-15', 'kd_barang' => 6139036777, 'kd_customer' => 'KC-9238475620', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-04-17', 'kd_barang' => 8051103770, 'kd_customer' => 'KC-3487560923', 'brg_keluar' => rand(50, 200)],
        //     ['kd_brg_keluar' => 'KBK-' . rand(1000000000, 9999999999), 'tgl_keluar' => '2024-05-19', 'kd_barang' => 8169512944, 'kd_customer' => 'KC-7482658245', 'brg_keluar' => rand(50, 200)],
        // ];

        // // Simpan data ke database menggunakan model BarangKeluar
        // foreach ($barang_keluar_data as $bk) {
        //     BarangKeluar::create($bk);
        // }
    }
}
