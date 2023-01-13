<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisqueuModel extends Model
{
    // use HasFactory;
    public $table = 'disqueus';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}