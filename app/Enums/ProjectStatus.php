<?php

namespace App\Enums;

enum ProjectStatus : string
{
   case OPEN = 'open';
    case IN_PROGRESS = 'in_progress';
    case BLOCKED = 'blocked';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
}
