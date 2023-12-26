<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'objects';

    protected $casts = [
        'before' => 'array',
        'after' => 'array'
    ];

    protected $fillable = [
        'title',
        'card_description',
        'card_image',
        'description',
        'before',
        'after'
    ];
}
