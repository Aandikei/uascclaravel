<?php

namespace App\Enums;

enum JenisKelamin: string
{
    case LAKI = 'L';
    case PEREMPUAN = 'P';

    public function label(): string
    {
        return match ($this) {
            self::LAKI => 'Laki-laki',
            self::PEREMPUAN => 'Perempuan',
        };
    }
}