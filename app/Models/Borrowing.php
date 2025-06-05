<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $fillable = [
        'member_id', 'book_id', 'borrowed_at', 'returned_at', 'status'
    ];

    public function member()
{
    return $this->belongsTo(Member::class, 'member_id', 'member_id');
}

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    protected $casts = [
        'borrowed_at' => 'datetime',
        'returned_at' => 'datetime',
    ];    
}
