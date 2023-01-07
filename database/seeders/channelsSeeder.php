<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Channels;

class channelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear the post table
        Channels::truncate();

        $channels = [
            [
                'channelId' => 1,
                'channelName' => 'KostasWorkouts',
                'creationDate' => '2020-10-22',
                'channelDescription' => 'Hi I am Kostas and this is my channel . Here I post daily workout videos!',
                'User_userId' => 1
            ],
            [
                'channelId' => 2,
                'channelName' => 'EleniArt',
                'creationDate' => '2019-04-10',
                'channelDescription' => 'Elenis Art Gallery',
                'User_userId' => 2
            ],
            [
                'channelId' => 3,
                'channelName' => 'VasquezPlays',
                'creationDate' => '2018-01-02',
                'channelDescription' => 'Streamer Vasquez playing games',
                'User_userId' => 3
            ],
            [
                'channelId' => 4,
                'channelName' => 'LearnSQL',
                'creationDate' => '2022-11-22',
                'channelDescription' => 'MySQL Tutorials .F#%k MongoDB !',
                'User_userId' => 9
            ],
            [
                'channelId' => 87,
                'channelName' => 'JohnVlogs',
                'creationDate' => '2017-06-12',
                'channelDescription' => 'Life of John',
                'User_userId' => 87
            ],
            [
                'channelId' => 101,
                'channelName' => 'ScienceFreak',
                'creationDate' => '2010-11-12',
                'channelDescription' => 'I LIKE SCIENCE !',
                'User_userId' => 45
            ],
            [
                'channelId' => 550,
                'channelName' => 'Cosmosport',
                'creationDate' => '2018-11-12',
                'channelDescription' => 'Sport Highlights',
                'User_userId' => 550
            ]
        ];

        foreach ($channels as $channel) {
            Channels::create($channel);
        }
    }
}
