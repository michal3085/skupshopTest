<?php

namespace App\Enums;

use ArchTech\Enums\Values;

enum RoleEnum: string
{
    use  Values;

    case USER = 'user';
    case ADMIN = 'admin';

    public function slug(): string
    {
        return match ($this) {
            self::USER => 'user',
            self::ADMIN => 'admin',
        };
    }

    public function label(): string
    {
        return match ($this) {
            self::USER => 'Użytkownik',
            self::ADMIN => 'Administrator',
        };
    }
}
