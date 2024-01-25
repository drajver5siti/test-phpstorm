<?php

namespace App\Enums;

enum Role: string
{
    case ADMIN = 'ADMIN';
    case STUDENT = 'STUDENT';
    case PROFESSOR = 'PROFESSOR';

    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}