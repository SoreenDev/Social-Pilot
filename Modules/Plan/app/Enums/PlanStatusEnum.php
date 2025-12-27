<?php

namespace Modules\Plan\Enums;

use App\Enums\Enum;

enum PlanStatusEnum : string implements Enum
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    public function getTitle(): string
    {
        return match ($this) {
            self::ACTIVE => __('Active'),
            self::INACTIVE => __('Inactive'),
            default => __('Unknown')
        };
    }
}
