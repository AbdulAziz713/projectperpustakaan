<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        $anggotaUsers = [
            [
                'name' => 'Anggota 1',
                'email' => 'anggota1@example.com',
                'password' => Hash::make('password'), // gunakan bcrypt
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'photo' => null,
                'role' => 'anggota',
            ],
            [
                'name' => 'Anggota 2',
                'email' => 'anggota2@example.com',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'photo' => null,
                'role' => 'anggota',
            ],
            [
                'name' => 'Anggota 3',
                'email' => 'anggota3@example.com',
                'password' => Hash::make('password'), // gunakan bcrypt
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'photo' => null,
                'role' => 'anggota',
            ],
            [
                'name' => 'Anggota 4',
                'email' => 'anggota4@example.com',
                'password' => Hash::make('password'), // gunakan bcrypt
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'photo' => null,
                'role' => 'anggota',
            ],
            [
                'name' => 'Anggota 5',
                'email' => 'anggota5@example.com',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'photo' => null,
                'role' => 'anggota',
            ],
            // Tambahkan data anggota lain jika perlu
        ];

        DB::table('users')->insert($anggotaUsers);
    }
}
