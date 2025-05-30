<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Jika menggunakan User
        'book_id',
        'borrowed_at',
        'returned_at',
    ];

    protected $dates = [
        'borrowed_at',
        'returned_at',
    ];

    // Relasi ke User (jika user yang meminjam)
    public function user()
{
    return $this->belongsTo(User::class);
}

public function book()
{
    return $this->belongsTo(Book::class);
}

}
