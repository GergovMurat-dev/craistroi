<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_description',
        'big_block_title',
        'big_block_description',
        'big_block_image',
        'about_description',
        'about_title',
        'about_subtitle',
        'about_image'
    ];
}
