<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'tambah_user']);
        Permission::create(['name'=>'ubah_user']);
        Permission::create(['name'=>'lihat_user']);
        Permission::create(['name'=>'hapus_user']);
        
        Permission::create(['name'=>'tambah_barang']);
        Permission::create(['name'=>'ubah_barang']);
        Permission::create(['name'=>'lihat_barang']);
        Permission::create(['name'=>'hapus_barang']);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'guru']);
        Role::create(['name'=>'siswa']);


        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah_user');
        $roleAdmin->givePermissionTo('ubah_user');
        $roleAdmin->givePermissionTo('lihat_user');
        $roleAdmin->givePermissionTo('hapus_user');

        $roleGuru = Role::findByName('guru');
        $roleGuru->givePermissionTo('lihat_user');
        $roleGuru->givePermissionTo('ubah_user');

        $roleSiswa = Role::findByName('siswa');
        $roleSiswa->givePermissionTo('lihat_user');


    }
}
