<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')->insert([
            'name' => "Pickup Truck",
        ]);
        DB::table('vehicle_types')->insert([
            'name' => "Van",
        ]);
        DB::table('vehicle_types')->insert([
            'name' => "Car",
        ]);
        DB::table('vehicle_types')->insert([
            'name' => "Semi Truck",
        ]);
        DB::table('vehicle_types')->insert([
            'name' => "Truck Mounted Crane",
        ]);
        DB::table('vehicle_types')->insert([
            'name' => "Crawler Crane",
        ]);
        DB::table('vehicle_types')->insert([
            'name' => "Mobile Crane",
        ]);
        DB::table('vehicle_types')->insert([
            'name' => "Rough Terrain Crane",
        ]);
    }
}
