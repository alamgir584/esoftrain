<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trendingproject extends Model
{
    use HasFactory;
    protected $fillable = [
        'thumbnail',
        'title',
        'details',

    ];
}
