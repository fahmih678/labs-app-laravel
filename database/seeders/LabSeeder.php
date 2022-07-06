<?php

namespace Database\Seeders;

use App\Models\Lab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lab::updateOrCreate([
            'id' => 1
        ],[
            'slug' => 'lab-software-engineering',
            'code' => 'lsd',
            'name' => 'Software Engineering',
            'description' => 'Lab Software Engineering untuk praktikum membuat aplikasi',
            'price_hourly' => 100000,
            'open_hour' => '07:00:00',
            'close_hour' => '21:00:00'
        ]);
        Lab::updateOrCreate([
            'id' => 2
        ],[
            'slug' => 'lab-multimedia-studio',
            'code' => 'lms',
            'name' => 'Multimedia Studio',
            'description' => 'Lab Multimedia Studion untuk praktikum multimedia',
            'price_hourly' => 120000,
            'open_hour' => '07:00:00',
            'close_hour' => '21:00:00'
        ]);
        Lab::updateOrCreate([
            'id' => 3
        ],[
            'slug' => 'lab-computer-network-instumentation',
            'code' => 'lcn',
            'name' => 'Computer Network And Instrumentation',
            'description' => 'Lab Computer Network And Instrumentation untuk praktikum Computer Network',
            'price_hourly' => 200000,
            'open_hour' => '07:00:00',
            'close_hour' => '21:00:00'
        ]);


    }
}
