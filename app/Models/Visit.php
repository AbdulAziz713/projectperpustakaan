<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $primaryKey = 'id_visits';

    protected $fillable = [
        'name', 'date', 'enter_at', 'out_at'
    ];
}
