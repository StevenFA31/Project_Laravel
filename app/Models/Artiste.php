<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    // use HasFactory;
    protected $table = 'artiste';
    public function disques()
    {
        return $this->hasMany(Artiste::class, 'artiste_id');
    }
}