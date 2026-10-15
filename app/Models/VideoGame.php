<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoGame extends Model
{
    protected $fillable = [
        'title',
        'platform',
        'genre',
        'developer',
    ];
}