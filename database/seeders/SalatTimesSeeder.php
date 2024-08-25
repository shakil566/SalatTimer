<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalatTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the Salat times data
        $salatTimes = [
            [
                'name' => 'Fajr',
                'time' => '05:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dhuhr',
                'time' => '12:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Asr',
                'time' => '16:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maghrib',
                'time' => '19:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Isha',
                'time' => '20:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the Salat times into the database
        DB::table('salat_times')->insert($salatTimes);
    }
}