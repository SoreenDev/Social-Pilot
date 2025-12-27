<?php

namespace Modules\Plan\Enums;

use App\Enums\Enum;

enum PlanLimitPeriodEnum : String implements Enum
{

    case HOUR = 'hour';
    case DAY = 'day';
    case WEEK = 'week';

    public function getTitle(): String
    {
        return match ($this) {
            self::HOUR => __('Hour'),
            self::DAY  => __('Day'),
            self::WEEK => __('Week'),
            default => __('Unknown')
        };
    }
}
