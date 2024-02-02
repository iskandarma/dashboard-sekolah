<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);
        $admin->assignRole('admin');

        $guru = User::create([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('12345')
        ]);
        $guru->assignRole('guru');

        $siswa = User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('12345')
        ]);
        $siswa->assignRole('siswa');
    }

}
