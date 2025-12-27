<?php

namespace Modules\Plan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Plan\Enums\PlanStatusEnum;
use Modules\Plan\Enums\UserPlanStatusEnum;
use Modules\Plan\Http\Requests\StoreUserPlanRequest;
use Modules\Plan\Models\Plan;
use Modules\Plan\Models\UserPlan;

class UserPlanController extends Controller
{
    public function index()
    {
        $userPlans = UserPlan::with('plan')->where('user_id', auth()->user()->id)->get();
        $plans = Plan::where('status', PlanStatusEnum::ACTIVE)->get();
        $headerTable = ['plan name', 'date', 'weeks count', 'status', 'start at - end at', 'price'];
        return view('AdminDashboard.plan', compact('userPlans', 'headerTable', 'plans'));
    }

    public function store(StoreUserPlanRequest $request) {
        DB::transaction(function () use ($request) {
            $plan = Plan::find($request->plan_id);
            UserPlan::create([
                ...$request->validated(),
                'status' => UserPlanStatusEnum::ACTIVE,
                'date' => now(),
                'user_id' => auth()->user()->id,
                'price' => intval($request->weeks_count) * $plan->weekly_price,
                'start_at' => now(),
                'end_at' => now()->addweeks(intval($request->weeks_count)),
            ]);
        });
    }
}
