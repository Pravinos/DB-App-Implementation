<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Impressions;
class impressionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $impressions = [
            [
                'impressionId' => 1,
                'trafficType' => 'Main Page',
                'isRecommended' => true,
                'Post_postId' => 1782156,
                'User_userId' => 1
            ],
            [
                'impressionId' => 2,
                'trafficType' => 'Trending Page',
                'isRecommended' => true,
                'Post_postId' => 6598741,
                'User_userId' => 2
            ],
            [
                'impressionId' => 3,
                'trafficType' => 'Subscriptions',
                'isRecommended' => false,
                'Post_postId' => 1245876,
                'User_userId' => 3
            ],
            [
                'impressionId' => 4,
                'trafficType' => 'Trending Page',
                'isRecommended' => true,
                'Post_postId' => 1511,
                'User_userId' => 4
            ],
            [
                'impressionId' => 5,
                'trafficType' => 'Trending Page',
                'isRecommended' => true,
                'Post_postId' => 17571,
                'User_userId' => 5
            ],
            [
                'impressionId' => 6,
                'trafficType' => 'External Source',
                'isRecommended' => false,
                'Post_postId' => 8457,
                'User_userId' => 6
            ],
            [
                'impressionId' => 7,
                'trafficType' => 'Subscriptions',
                'isRecommended' => true,
                'Post_postId' => 6541,
                'User_userId' => 7
            ],
            [
                'impressionId' => 8,
                'trafficType' => 'External Source',
                'isRecommended' => false,
                'Post_postId' => 7771,
                'User_userId' => 8
            ],
            [
                'impressionId' => 9,
                'trafficType' => 'Playlist',
                'isRecommended' => true,
                'Post_postId' => 11171,
                'User_userId' => 9
            ],
            [
                'impressionId' => 10,
                'trafficType' => 'External Source',
                'isRecommended' => false,
                'Post_postId' => 991,
                'User_userId' => 10
            ],
            [
                'impressionId' => 11,
                'trafficType' => 'Trending Page',
                'isRecommended' => true,
                'Post_postId' => 4854,
                'User_userId' => 154
            ],
            [
                'impressionId' => 15,
                'trafficType' => 'Trending Page',
                'isRecommended' => true,
                'Post_postId' => 13,
                'User_userId' => 45
            ],
            [   'impressionId' => 16,
                'trafficType' => 'Trending Page',
                'isRecommended' => 1,
                'Post_postId' => 13,
                'User_userId' => 6,        ],
            ['impressionId' => 22, 'trafficType' => 'Subscriptions',    'isRecommended' => 1,     'Post_postId' => 1,       'User_userId' => 1,        ],
            ['impressionId' => 29, 'trafficType' => 'Trending Page',    'isRecommended' => 1,     'Post_postId' => 13,       'User_userId' => 2,        ],
            ['impressionId' => 30, 'trafficType' => 'Trending Page',    'isRecommended' => 1,     'Post_postId' => 13,       'User_userId' => 3,        ],
            ['impressionId' => 31, 'trafficType' => 'Trending Page',    'isRecommended' => 1,     'Post_postId' => 13,       'User_userId' => 4,        ],
            ['impressionId' => 44, 'trafficType' => 'Main Page',    'isRecommended' => 1,     'Post_postId' => 4144546,       'User_userId' => 15,        ],
            ['impressionId' => 222, 'trafficType' => 'Trending Page'     ,'isRecommended' => 1,     'Post_postId' => 1651121,       'User_userId' => 556,        ],
        ];
        foreach ($impressions as $impression) {
            Impressions::create($impression);
        }
        }
    }
