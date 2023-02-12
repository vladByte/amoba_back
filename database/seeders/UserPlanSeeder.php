<?php

namespace Database\Seeders;

use App\Models\user_plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userPlans = collect([
            [
                "user_id" => 12,
                "currency_id" => 2,
                "next_user_plan_id" => null,
                "start_timestamp" => null,
                "end_timestamp" => null,
                "renewal_timestamp" => null,
                "renewal_price" => 30.0000000000,
                "requires_invoice" => 0,
                "status" => 10,
                "created" => "2021-12-18 06:14:37",
                "modified" => "2021-12-18 06:14:37",
                "financiation" => 0,
                "status_financiation" => 0,
                "language" => "ca_ES",
                "nif" => "",
                "business_name" => "",
                "pending_payment" => 0,
                "date_max_payment" => null,
                "proxim_start_timestamp" => null,
                "proxim_end_timestamp" => null,
                "proxim_renewal_timestamp" => null,
                "proxim_renewal_price" => null,
                "credits_return" => 0.0,
                "company_id" => 33,
                "cancel_employee" => 0,
                "force_renovation" => 0,
                "date_canceled" => null,
                "amount_confirm_canceled" => null,
                "credit_confirm_canceled" => null,
                "cost_center_id" => 0
            ]
        ]);

        $userPlans->each(fn($userPlan) => user_plan::create($userPlan));
    }
}
