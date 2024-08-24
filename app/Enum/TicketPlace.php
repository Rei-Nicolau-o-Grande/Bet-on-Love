<?php

namespace App\Enum;

enum TicketPlace: string
{
    case Primary = 'Primary';
    case Secondary = 'Secondary';
    case Tertiary = 'Tertiary';
    case Quaternary = 'Quaternary';
    case Quinary = 'Quinary';
    case Loser = 'Loser';
    case Wait = 'Wait';
}
