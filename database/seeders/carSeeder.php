<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class carSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cars')->insert([
            'car_name' => 'innova',
            'car_owner' => 'yatno',
            'car_plate' => 'L 1234 m',
            'car_service' => 'roda',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
