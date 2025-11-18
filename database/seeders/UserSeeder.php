<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Alya',
                'email' => 'alyaaalawiyah00@gmail.com',
                'password' => Hash::make('yayacantik'),
            ],
        ]);
    }
}
