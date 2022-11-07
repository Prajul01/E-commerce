<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name'=>'Bag',
                'price'=>'8000',
                'image'=>'1667758437_ba.jpg',
                'description'=>'Black&nbsp; Lether Bag made in pakistham',
                'short_description'=>'<p>Black&nbsp; Lether Bag</p>',
                'status'=>1,
                'category_id'=>Category::all()->random()->id,
                'created_by'=>User::all()->random()->id,
            ],
            [
                'name'=>'Hand Bag',
                'price'=>'7500',
                'image'=>'1667758514_baa.jpg',
                'description'=>'<p>Ladies pure lether hand bag</p>',
                'short_description'=>'<p>Ladies hand Bag</p>',
                'status'=>1,
                'category_id'=>Category::all()->random()->id,
                'created_by'=>User::all()->random()->id,
            ],
            [
                'name'=>'Watch',
                'price'=>'10000.00',
                'image'=>'1667758934_pic2.jpg',
                'description'=>'<p>Gents orginal watch&nbsp;</p>',
                'short_description'=>'<p>Gents watch</p>',
                'status'=>1,
                'category_id'=>Category::all()->random()->id,
                'created_by'=>User::all()->random()->id,
            ],
            [
                'name'=>'Perfume',
                'price'=>'2000.00',
                'image'=>'1667758993_bottle.jpg',
                'description'=>'<p>Men&#39;s long lasting perfume</p>',
                'short_description'=>'<p>Men&#39;s Perfume</p>',
                'status'=>1,
                'category_id'=>Category::all()->random()->id,
                'created_by'=>User::all()->random()->id,
            ],
            [
                'name'=>'Perfume',
                'price'=>'2500.00',
                'image'=>'1667759068_pic10.jpg',
                'description'=>'<p>Ladies&nbsp; long lasting perfume&nbsp;</p>',
                'short_description'=>'<p>Ladies perfume&nbsp;</p>',
                'status'=>1,
                'category_id'=>Category::all()->random()->id,
                'created_by'=>User::all()->random()->id,
            ],
            [
                'name'=>'watch',
                'price'=>'5000.00',
                'image'=>'1667759134_pi2.jpg',
                'description'=>'<p>Ladies water proof&nbsp;&nbsp;Watch&nbsp;</p>',
                'short_description'=>'<p>Ladies watch</p>',
                'status'=>1,
                'category_id'=>Category::all()->random()->id,
                'created_by'=>User::all()->random()->id,
            ],

        ];

        foreach ($product as $key => $product) {
            Product::create($product);
        }
        }
}
