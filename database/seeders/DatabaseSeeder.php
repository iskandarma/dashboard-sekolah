<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ])
        DB::table('kategoris')->insert([
            ['name' => "Barang"],
            ['name' => "Proyektor"],
            ['name' => "Radio"],
            ['name' => "Kulkas LG Dua Pintu"],
            ['name' => "Green Screen"],
        ]);;
        DB::table('status_barang')->insert([
            ['id' => 200,
             'name'=> 'Dipinjam'],
            ['id' => 500,
             'name'=> 'Dikembalikan'],
            ['id' => 400,
             'name'=> 'Pending'],
           
        ]);;
        DB::table('barangs')->insert([
            [
            'id_kategori' => 1,
            'nama_barang' => 'Barang 1',
            'stok' => 4,
            'deskripsi' => 'Deskripsi Barang 1',
            ],
            [
            'id_kategori' => 2,
            'nama_barang' => 'Barang 2',
            'stok' => 5,
            'deskripsi' => 'Deskripsi Barang 2',
            ],
            [
            'id_kategori' => 3,
            'nama_barang' => 'Barang 3',
            'stok' => 12,
            'deskripsi' => 'Deskripsi Barang 3',
            ],
            [
            'id_kategori' => 4,
            'nama_barang' => 'Barang 4',
            'stok' => 14,
            'deskripsi' => 'Deskripsi Barang 4',
            ],
            [
            'id_kategori' => 5,
            'nama_barang' => 'Barang 5',
            'stok' => 9,
            'deskripsi' => 'Deskripsi Barang 5',
            ],
        ]);;
        $this->call(RolePermissionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
