<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $locations = ['perpusda', 'tanggulun_barat', 'cipeundeuy', 'cisalak'];
        $publishers = ['Gramedia', 'Erlangga', 'Mizan', 'Bukune', 'GPU'];

        for ($i = 1; $i <= 200; $i++) {
            DB::table('books')->insert([
                'title'       => 'Judul Buku ' . $i,
                'author'      => 'Penulis ' . $i,
                'publisher'   => $publishers[array_rand($publishers)],
                'year'        => rand(1990, 2025),
                'stock'       => rand(1, 20),
                'location'    => $locations[array_rand($locations)],
                'photo'       => null, // atau bisa diisi string 'default.jpg'
                'description' => 'Deskripsi singkat buku ke-' . $i . '. Ini adalah contoh deskripsi.',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
        }
    }
}
