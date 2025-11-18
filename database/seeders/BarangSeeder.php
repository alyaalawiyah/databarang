<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->truncate();

        DB::table('barangs')->insert([
            [
                'kategori_id' => 1,
                'kode_barang' => 'B001',
                'nama_barang' => 'Laptop ASUS',
                'harga' => 7500000,
            ],
            [
                'kategori_id' => 2,
                'kode_barang' => 'B002',
                'nama_barang' => 'Mouse Logitech',
                'harga' => 150000,
            ],
            // [
            //     'kode_barang' => 'B003',
            //     'nama_barang' => 'Keyboard Mechanical',
            //     'harga' => 350000,
            //     'kategori_id' => 2,
            // ],
        ]);
    }
}
