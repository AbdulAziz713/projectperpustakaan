<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $primaryKey = 'member_id'; // <- Tambahkan ini

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'status'
    ];
    
    // Tambahan opsional jika member_id bukan auto increment atau bukan integer
    public $incrementing = true; // false jika bukan auto increment
    protected $keyType = 'int';  // 'string' jika tipe-nya string (misalnya UUID)

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
