<?php

namespace Modules\Plan\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Plan\Models\Plan;

class StoreUserPlanRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'plan_id' => ['required', 'numeric:','exists:'. (new Plan())->getTable() .',id'],
            'date' => ['required', 'date', 'date_format:Y-m-d'],
            'weeks_count' => ['required', 'numeric', 'min:1', 'max:3'],
        ];
    }

}
