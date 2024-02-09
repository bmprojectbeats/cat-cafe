<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'cat_id',
        'user',
        'cat',
        'time',
        'status_id',
    ];

    public function users(){
        return $this->hasMany(User::class, "id", "user_id");
    }
}
