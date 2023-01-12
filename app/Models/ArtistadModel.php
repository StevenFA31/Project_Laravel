<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ArtistadModel extends Model
{
    public $table = 'Disqueus';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}