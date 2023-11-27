<?php

namespace App\Enums;

enum SeniorityOptions: string
{
    case ENTRY = 'Entry Level';
    case JUNIOR = 'Junior';
    case MIDDLE = 'Middle Level';
    case SENIOR = 'Senior';
    case TEAM_LEADER = 'Team-Leader/Managment';
}
