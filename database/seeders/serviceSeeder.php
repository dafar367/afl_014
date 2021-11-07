<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->insert([
            'service_name' => 'manasin mobil',
            'service_code' => 'M1',
            'service_description' => 'manasin mobil ya gan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
