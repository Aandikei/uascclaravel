<?php

namespace App\Enums;

enum Kondisi: string
{
    case BAIK = 'baik';
    case RUSAK = 'rusak';

    public function label(): string
    {
        return match ($this) {
            self::BAIK => 'baik',
            self::RUSAK => 'rusak',
        };
    }
}
