<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'thumbnail',
        'image_client_main',
        'image_client',
        'image_concept',
        'image_service',
        'image_result',
        'client_title',
        'client_details',
        'concept_title',
        'concept_details',
        'service_title',
        'service_details',
        'result_title',
        'result_details',

    ];
}
