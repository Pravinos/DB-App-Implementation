<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Posts;

class postsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear the post table
        Posts::truncate();

        // Create some posts
        $posts = [
            [
                'postId' => 1,
                'title' => 'Messi lifts the World Cup',
                'duration' => 69,
                'description' => 'Messi finally is declared as the GOAT',
                'resolution' => '1080p',
                #'postTimestamp' => '2022-12-18 23:15:02',
                'Channel_channelId' => 550
            ],
            [
                'postId' => 11,
                'title' => 'Djokovic ATP Finals 2022',
                'duration' => 657,
                'description' => 'Djokovic takes the ATP Finals title',
                'resolution' => '720p',
                #'postTimestamp' => '2022-11-23 10:14:20',
                'Channel_channelId' => 17
            ],
            [
                'postId' => 13,
                'title' => 'elephant toothpaste experiment',
                'duration' => 926,
                'description' => 'crazy experiment',
                'resolution' => '4K',
                #'postTimestamp' => '2021-12-23 12:04:21',
                'Channel_channelId' => 101
            ],
            [
                'postId' => 24,
                'title' => 'VIC - Zvara',
                'duration' => 897,
                'description' => 'Villagers of Ioannina City',
                'resolution' => '1080p',
                #'postTimestamp' => '2022-03-09 23:56:02',
                'Channel_channelId' => 27
            ],
            [
                'postId' => 37,
                'title' => 'God Of War Ragnarok Let’s Play Part 1 ',
                'duration' => 2396,
                'description' => 'We play together the new GoW game … ',
                'resolution' => '4K',
                #'postTimestamp' => '2022-07-26 13:56:50',
                'Channel_channelId' => 31
            ],
            [
                'postId' => 41,
                'title' => 'Ash becomes Pokemon World Champion',
                'duration' => 1100,
                'description' => 'Ash Ketchum finally becomes Pokemon Champion',
                'resolution' => '1080p',
                #'postTimestamp' => '2022-11-15 22:40:25',
                'Channel_channelId' => 56
            ],
            ['postId' => 562,
            'title' => 'WORLD CUP DAY 1 HIGHLIGHTS',
            'duration' => 1026,
            'description' => '22.1.2022 matches highlights',
            'resolution' => '1080p',
            #'postTimestamp' => '2022-11-23 08:14:20',
            'Channel_channelId' => 540
            ]
        ];

        // Insert the posts into the database
        foreach ($posts as $post) {
            Posts::create($post);
        }
    }
}
