<?php

namespace Database\Seeders;

use App\Models\calendar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calendars = collect([
            [
                'calendar_id' => null,
                'name' => "Catalunya",
                'updated_at' => "2020-01-14 13:42:25",
                'created_at' => "2020-01-14 13:42:25"
            ],
            [
                'calendar_id' => null,
                'name' => "test calendar",
                'updated_at' => "2021-05-03 12:29:46",
                'created_at' => "2021-05-03 12:29:46"
            ],
            [
                'calendar_id' => null,
                'name' => "challenge test",
                'updated_at' => "2021-05-03 12:29:46",
                'created_at' => "2021-05-03 12:29:46"
            ],

        ]);

        $calendars->each(fn($calendar) => calendar::create($calendar));
    }
}
