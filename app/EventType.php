<?php

declare(strict_types=1);

namespace App;

use App\Models\Event;

enum EventType: string
{
    case NOTYPE = 'notype';
    case CONFERENCE = 'conference';
    case CONCERT = 'concert';
    case WORKSHOP = 'workshop';
    case EXHIBITION = 'exhibition';

    public static function toArray(): array
    {
        return array_column(EventType::cases(), 'value');
    }
}
