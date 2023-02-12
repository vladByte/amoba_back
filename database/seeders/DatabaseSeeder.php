<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\calendar_days_disabled;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            UserPlanSeeder::class,
            CalendarSeeder::class,
            CalendarDaysDisabledSeeder::class,
            RouteSeeder::class,
            RouteDataSeeder::class,
            ReservationSeeder::class,
            ServiceSeeder::class
        ]);





        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
