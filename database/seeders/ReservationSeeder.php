<?php

namespace Database\Seeders;

use App\Models\reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = collect([
            [
                "user_plan_id" => 1,
                "route_id" => 1,
                "track_id" => null,
                "reservation_start" => "2023-02-02 00:00:00",
                "reservation_end" => "2023-12-17 00:00:00",
                "route_stop_origin_id" => 597,
                "route_stop_destination_id" => 600,
                "created_at" => "2023-12-17 19:38:38",
                "updated_at" => "2023-12-17 19:38:38",
                "deleted_at" => null
            ],
            [
                "user_plan_id" => 1,
                "route_id" => 1,
                "track_id" => null,
                "reservation_start" => "2023-02-10 00:00:00",
                "reservation_end" => "2023-12-24 00:00:00",
                "route_stop_origin_id" => 597,
                "route_stop_destination_id" => 600,
                "created_at" => "2023-12-17 19:38:38",
                "updated_at" => "2023-12-17 19:38:38",
                "deleted_at" => null
            ],
            [
                "user_plan_id" => 1,
                "route_id" => 1,
                "track_id" => null,
                "reservation_start" => "2023-02-13 00:00:00",
                "reservation_end" => "2023-12-31 00:00:00",
                "route_stop_origin_id" => 597,
                "route_stop_destination_id" => 600,
                "created_at" => "2023-12-17 19:38:38",
                "updated_at" => "2023-12-17 19:38:38",
                "deleted_at" => null
            ],
            [
                "user_plan_id" => 1,
                "route_id" => 2,
                "track_id" => null,
                "reservation_start" => "2023-02-13 00:00:00",
                "reservation_end" => "2023-12-31 00:00:00",
                "route_stop_origin_id" => 597,
                "route_stop_destination_id" => 600,
                "created_at" => "2023-12-17 19:38:38",
                "updated_at" => "2023-12-17 19:38:38",
                "deleted_at" => null
            ]
        ]);

        $reservations->each(fn($reservation) => reservation::create($reservation));
    }
}
