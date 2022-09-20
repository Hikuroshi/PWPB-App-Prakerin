<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Siswa::create([
            'nisn' => '12345',
            'nama' => 'Hikmah Maulana',
            'kelas' => 'XII RPL 2',
            'alamat' => 'Kragilan',
            'no_hp' => '083813648878'
        ]);
    }
}
