<?php

namespace Modules\Plan\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Auth\Models\User;

class   UserPlan extends Model
{

    protected $fillable = ['user_id', 'plan_id', 'date', 'weeks_count', 'status', 'start_at', 'end_at', 'price'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class, 'plan_id', 'id');
    }
}
