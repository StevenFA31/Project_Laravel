<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtisteuModel extends Model
{
    // use HasFactory;
    public $table = 'artisteus';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}