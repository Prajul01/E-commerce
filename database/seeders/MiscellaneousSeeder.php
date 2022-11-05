<?php

namespace Database\Seeders;

use App\Models\Miscellaneous;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MiscellaneousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Miscellaneous::insert([
            'address' => 'Kathmandu',
            'phone' => '9818162681',
        ]);
    }
}
