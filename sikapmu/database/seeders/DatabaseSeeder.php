<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

>>>>>>> bd24631c99becb8d5470cb238fd2c9e78b0544b6

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
=======
        DB::table('users')->insert([
            'id' => "1",
            'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
            'nama' => "Admin",
            'email' => "admin@material.com",
            'kontak' => "0822",
            'role' => "Admin",
            'status_akun' => "Terverifikasi",
        ]);
>>>>>>> bd24631c99becb8d5470cb238fd2c9e78b0544b6
    }
}
