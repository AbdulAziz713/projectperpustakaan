<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrowing;
use App\Models\User;
use App\Models\Book;

class BorrowingSeeder extends Seeder
{
    public function run(): void
    {
        $userIds = User::where('role', 'anggota')->pluck('id');
        $bookIds = Book::pluck('id');

        if ($userIds->isEmpty() || $bookIds->isEmpty()) {
            $this->command->warn("No users or books found. Seeder skipped.");
            return;
        }

        foreach (range(1, 20) as $i) {
            Borrowing::create([
                'user_id' => $userIds->random(),
                'book_id' => $bookIds->random(),
                'borrowed_at' => now()->subDays(rand(1, 30)),
                'returned_at' => rand(0, 1) ? now()->subDays(rand(1, 10)) : null,
                'status' => rand(0, 1) ? 'dikembalikan' : 'dipinjam',
            ]);
        }

        $this->command->info("BorrowingSeeder selesai (20 data).");
    }
}
