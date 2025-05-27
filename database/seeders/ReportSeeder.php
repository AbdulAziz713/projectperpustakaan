<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 20) as $i) {
            Report::create([
                'title' => "Laporan $i",
                'content' => "Isi laporan nomor $i",
                'type' => collect(['peminjaman', 'pengembalian', 'anggota'])->random(),
                'created_at' => now()->subDays(rand(1, 180)),
            ]);
        }
    }
}

