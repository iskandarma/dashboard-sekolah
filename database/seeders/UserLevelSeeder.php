<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('userlevels')->insert([
            [
                'name' => 'admin',
                'desc' => 'admin sekolah / admin sarpras'
            ],
            [
                'name' => 'kepsek',
                'desc' => 'kepala sekolah'
            ],
            [
                'name' => 'guru',
                'desc' => 'guru'
            ]
        ]);
    }
}
