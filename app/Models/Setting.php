<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $casts = [
        'achievements' => 'array',
    ];

    protected $fillable = [
        'banner_description',
        'project_count',
        'friendly_clients',
        'prizes',
        'achievements',
        'achievements_title'
    ];

}
