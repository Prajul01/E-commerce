<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = [
            [
                'title'=>'Dasahi Offer 50% Off',
                'description'=>'Bag',
                'image'=>'1667467848_s1.jpg',
                'status'=>1,



            ],
            [
                'title'=>' Flat 45% Off',
                'description'=>'Watch',
                'image'=>'1667468727_p4.jpg
',
                'status'=>1,



            ],
            [
                'title'=>'Flat 40% Off',
                'description'=>'Perfume',
                'image'=>'1667467877_s3.jpg',
                'status'=>1,



            ],
        ];

        foreach ($slider as $key => $slider) {
            Slider::create($slider);
        }
    }
}
