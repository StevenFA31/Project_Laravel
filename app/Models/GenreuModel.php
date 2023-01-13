<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreuModel extends Model
{
    // use HasFactory;
    public $table = 'genreus';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}