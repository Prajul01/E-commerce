<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name'=>'Permume',

                'created_by'=>User::all()->random()->id,

            ],
            [
                'name'=>'Watch',

                'created_by'=>User::all()->random()->id,

            ],
            [
                'name'=>'Bag',

                'created_by'=>User::all()->random()->id,
                'updated_by'=>User::all()->random()->id,

            ],
        ];

        foreach ($category as $key => $category) {
            Category::create($category);
        }
    }

}
