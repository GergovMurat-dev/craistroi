<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $casts = [
        'achievements' => 'array',
        'card' => 'array',
        'work_cards' => 'array',
    ];

    protected $fillable = [
        'banner_description',
        'project_count',
        'friendly_clients',
        'prizes',
        'achievements',
        'achievements_title',
        'advantages_title',
        'card',
        'work_cards',
    ];

}
