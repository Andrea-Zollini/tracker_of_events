<?php

declare(strict_types=1);

namespace App;

enum EventStatus: string
{
    case OPEN = 'open';
    case SOLD_OUT = 'sold out';
    case CANCELLED = 'cancelled';
    case CLOSED = 'closed';

    public static function toArray(): array
    {
        return array_column(EventStatus::cases(), 'value');
    }
}
