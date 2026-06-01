<?php

namespace App\Enums;

enum HotelStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public static function getAll(): array
    {
        return array_column(self::cases(), 'value');
    }
}
