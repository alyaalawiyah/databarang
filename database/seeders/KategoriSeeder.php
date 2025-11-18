<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('kategoris')->truncate();

        DB::table('kategoris')->insert([
            [
                'id' => 1,
                'nama_kategori' => 'Laptop',
            ],[
                'id' => 2,
                'nama_kategori' => 'Aksesoris',
            ]  
        ]);
    }
}
