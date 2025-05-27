<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visit;
use Carbon\Carbon;

class VisitSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Visit::create([
                'name' => "Pengunjung $i",
                'date' => now()->toDateString(),
                'enter_at' => now()->subHours(rand(1, 3))->format('H:i:s'),
                'out_at' => now()->format('H:i:s'),
                'visit_date' => Carbon::now()->subDays(rand(0, 10))->toDateString(),
            ]);
        }
    }
}
