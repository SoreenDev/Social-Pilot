<?php

namespace Modules\Plan\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    protected $fillable = ['name', 'description', 'limit_period', 'limit_value', 'weekly_price', 'status'];

    public function userPlans(): HasMany
    {
        return $this->hasMany(UserPlan::class, 'plan_id');
    }
}
