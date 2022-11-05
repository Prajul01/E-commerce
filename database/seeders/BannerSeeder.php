<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = [
            [
                'name'=>'Bag',
                'description'=>'Bag',
                'image'=>'1667466292_b1.jpg',
                'status'=>1,



            ],
            [
                'name'=>'Watch',
                'description'=>'Watch',
                'image'=>'1667466121_pi2.jpg',
                'status'=>1,



            ],
            [
                'name'=>'Bag',
                'description'=>'Bag',
                'image'=>'1667466530_b1.jpg',
                'status'=>1,



            ],
        ];

        foreach ($banner as $key => $banner) {
            Banner::create($banner);
        }
    }
}
