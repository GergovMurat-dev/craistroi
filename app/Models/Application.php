<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public const TYPE_SMALL = 0;
    public const TYPE_BIG = 1;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'type'
    ];

    public static function getTypeLabels()
    {
        return [
            self::TYPE_SMALL => 'Обратная связь',
            self::TYPE_BIG => 'Заявки'
        ];
    }

}
