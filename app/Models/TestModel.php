<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    public $table = 'Conférence';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

// use HasFactory;
// public $timestamps = false;
}