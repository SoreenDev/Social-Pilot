<?php

namespace Modules\Plan\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Plan\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::insert([
            [
                'name' => 'Starter',
                'description' => 'Perfect for beginners',
                'limit_value' => 2,
                'limit_period' => 'week',
                'weekly_price' => 6,
                'status' => 'active',
            ],
            [
                'name' => 'Creator',
                'description' => 'For active content creators',
                'limit_value' => 4,
                'limit_period' => 'week',
                'weekly_price' => 10,
                'status' => 'active',
            ],
            [
                'name' => 'Growth',
                'description' => 'Scale your social presence',
                'limit_value' => 1,
                'limit_period' => 'day',
                'weekly_price' => 14,
                'status' => 'active',
            ],
        ]);
    }
}
