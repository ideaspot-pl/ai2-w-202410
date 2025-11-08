<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('measurements')->insert([
            'location_id' => 1,
            'date' => '2025-12-24',
            'celsius' => 12,
        ]);
        DB::table('measurements')->insert([
            'location_id' => 1,
            'date' => '2025-12-25',
            'celsius' => 13,
        ]);
        DB::table('measurements')->insert([
            'location_id' => 1,
            'date' => '2025-12-26',
            'celsius' => 10,
        ]);
    }
}
