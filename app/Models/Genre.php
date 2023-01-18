<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = "genre";

    public function disques()
    {
        return $this->hasMany(Genre::class, 'genre_id');
    }
}