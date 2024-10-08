<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Closed = 'closed';

    public function label(): String
    {
        return match ($this) {
            self::Open => 'Aceitando prpopostas',
            self::Closed => 'Encerrado',
        };
    }
}
