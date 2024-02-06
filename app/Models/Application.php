<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'cat_id',
        'time_id',
        'status_id',
    ];
}
