<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
        'id',
        'cat_name',
        'description',
        'avatar',
        'category_id',
    ];
}
