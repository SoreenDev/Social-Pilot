<?php

namespace Modules\Plan\Enums;

use App\Enums\Enum;

enum UserPlanStatusEnum: string implements Enum
{
    case ACTIVE       = 'active';
    case INACTIVE     = 'inactive';
    case PENDING      = 'pending';
    case EXPIRED      = 'expired';
    case CANCELLED    = 'cancelled';

    public function getTitle(): string
    {
        return match ($this) {
            self::ACTIVE    => __('Active'),
            self::INACTIVE  => __('Inactive'),
            self::PENDING   => __('Pending Payment'),
            self::EXPIRED   => __('Expired'),
            self::CANCELLED => __('Cancelled'),
            default         => __('Unknown'),
        };
    }


}
