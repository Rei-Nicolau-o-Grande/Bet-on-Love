<?php

namespace App\Enum;

enum StatusPost: string
{
    case Published = 'Published';
    case Pending = 'Pending';
    case Denied = 'Denied';
    case Draft = 'Draft';
    case Finished = 'Finished';
}
