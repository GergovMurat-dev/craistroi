<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $casts = [
        'services' => 'array'
    ];

    protected $fillable = [
        'title',
        'description',
        'card_image',
        'card_description',
        'image',
        'services'
    ];
}
