<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posts;
use App\Models\Channels;
use App\Models\AppUsers;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(postsSeeder::class);
        $this->call(channelsSeeder::class);
        $this->call(appusersSeeder::class);
        $this->call(viewsSeeder::class);
        $this->call(impressionsSeeder::class);
        $this->call(categoriesSeeder::class);
        $this->call(commentsSeeder::class);
    }
}
