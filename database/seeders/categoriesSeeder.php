<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;


class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category' => 'Sports',
             'post_postId' => 5],
            ['category' => 'Technology',
             'post_postId' => 56],
            ['category' => 'Gaming',
             'post_postId' => 456],
            ['category' => 'Arts',
             'post_postId' => 545],
            ['category' => 'Music',
             'post_postId' => 44447],
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}
