<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MembersSeeder extends Seeder
{
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '081234567890',
                'address' => 'Jl. Mawar No. 123, Jakarta',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'phone' => '081298765432',
                'address' => 'Jl. Melati No. 45, Bandung',
                'status' => 'inactive',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Robert Brown',
                'email' => 'robertbrown@example.com',
                'phone' => '081223344556',
                'address' => 'Jl. Kenanga No. 67, Surabaya',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
