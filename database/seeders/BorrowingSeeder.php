<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrowing;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Str;

class BorrowingSeeder extends Seeder
{
    public function run(): void
    {
        $users = \App\Models\User::pluck('id')->toArray();
        $books = \App\Models\Book::pluck('id')->toArray();

        // Buat 20 data peminjaman
        for ($i = 0; $i < 20; $i++) {
            $status = fake()->randomElement(['dipinjam', 'dikembalikan']);

            $borrowedAt = fake()->dateTimeBetween('-2 months', 'now');
            $returnedAt = $status === 'dikembalikan'
                ? fake()->dateTimeBetween($borrowedAt, 'now')
                : null;

            Borrowing::create([
                'member_id'   => rand(1, 4),
                'book_id'     => rand(24, 200),
                'borrowed_at' => $borrowedAt,
                'returned_at' => $returnedAt,
                'status'      => $status,
            ]);
        }
    }
}
