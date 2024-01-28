<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $table = "mains";

    protected $casts = [
        'about_us' => 'array',
        'partners' => 'array',
        'big_slider' => 'array'
    ];

    protected $fillable = [
        'main_title',
        'main_description',
        'background_image',
        'about_us',
        'partners',
        'big_slider',
        'service_description'
    ];

}
