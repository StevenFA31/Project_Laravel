<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disque extends Model
{
    use HasFactory;

    protected $table = "disque";

    public function artiste()
    {
        return $this->belongsTo(Artiste::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}