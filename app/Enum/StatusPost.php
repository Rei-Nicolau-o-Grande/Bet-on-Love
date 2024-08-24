<?php

namespace App\Enum;

enum StatusPost: string
{
    case Approved = 'Approved';
    case Denied = 'Denied';
    case Pending = 'Pending';
}
