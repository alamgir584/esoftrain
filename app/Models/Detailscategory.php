<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailscategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_details',
        'category_logo',
    ];
}
