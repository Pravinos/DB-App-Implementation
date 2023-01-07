<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Views;
class viewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $views = [
            [
                'viewId' => 1,
                'viewTimestamp' => '2022-12-10 14:05:10',
                'viewDuration' => 521,
                'isLiked' => true,
                'impression_impressionId' => 1,
                'impression_Post_postId' => 0,
            ],
            [
                'viewId' => 2,
                'viewTimestamp' => '2022-02-19 19:12:04',
                'viewDuration' => 758,
                'isLiked' => true,
                'impression_impressionId' => 2,
                'impression_Post_postId' => 0,
            ],
            [
                'viewId' => 3,
                'viewTimestamp' => '2022-06-11 02:09:14',
                'viewDuration' => 500,
                'isLiked' => false,
                'impression_impressionId' => 3,
                'impression_Post_postId' => 0,
            ],
            [
                'viewId' => 4,
                'viewTimestamp' => '2022-05-01 05:55:32',
                'viewDuration' => 156,
                'isLiked' => true,
                'impression_impressionId' => 4,
                'impression_Post_postId' => 1511,
            ],
            [
                'viewId' => 5,
                'viewTimestamp' => '2021-12-11 10:15:32',
                'viewDuration' => 84,
                'isLiked' => false,
                'impression_impressionId' => 5,
                'impression_Post_postId' => 17571,
            ],
            [
                'viewId' => 6,
                'viewTimestamp' => '2022-06-06 09:15:33',
                'viewDuration' => 654,
                'isLiked' => true,
                'impression_impressionId' => 6,
                'impression_Post_postId' => 8457,
            ],
            [
                'viewId' => 7,
                'viewTimestamp' => '2022-04-01 06:21:30',
                'viewDuration' => 354,
                'isLiked' => false,
                'impression_impressionId' => 7,
                'impression_Post_postId' => 6541,
            ],
            [
                'viewId' => 8,
                'viewTimestamp' => '2022-06-11 09:22:32',
                'viewDuration' => 457,
                'isLiked' => false,
                'impression_impressionId' => 8,
                'impression_Post_postId' => 7771,
            ],
            [
                'viewId' => 9,
                'viewTimestamp' => '2021-04-11 07:55:12',
                'viewDuration' => 214,
                'isLiked' => false,
                'impression_impressionId' => 9,
                'impression_Post_postId' => 11171,
            ],
            [
                'viewId' => 10,
                'viewTimestamp' => '2022-11-11 01:19:34',
                'viewDuration' => 94,
                'isLiked' => true,
                'impression_impressionId' => 10,
                'impression_Post_postId' => 991,
            ],
            [
                'viewId' => 11,
                'viewTimestamp' => '2022-05-12 05:15:32',
                'viewDuration' => 394,
                'isLiked' => true,
                'impression_impressionId' => 11,
                'impression_Post_postId' => 4854,
            ],
            [
                'viewId' => 12,
                'viewTimestamp' => '2022-03-21 10:18:42',
                'viewDuration' => 64,
                'isLiked' => true,
                'impression_impressionId' => 12,
                'impression_Post_postId' => 1455,
            ],
            [
                'viewId' => 13,
                'viewTimestamp' => '2022-06-21 03:55:32',
                'viewDuration' => 44,
                'isLiked' => true,
                'impression_impressionId' => 45,
                'impression_Post_postId' => 999,
            ],
            [
                'viewId' => 45,
                'viewTimestamp' => '2022-08-12 22:19:54',
                'viewDuration' => 250,
                'isLiked' => false,
                'impression_impressionId' => 45,
                'impression_Post_postId' => 0,
            ],
            [
                'viewId' => 58,
                'viewTimestamp' => '2022-04-01 05:15:32',
                'viewDuration' => 454,
                'isLiked' => true,
                'impression_impressionId' => 58,
                'impression_Post_postId' => 0,
            ],
            [
                'viewId' => 59,
                'viewTimestamp' => '2022-10-26 09:15:32',
                'viewDuration' => 925,
                'isLiked' => true,
                'impression_impressionId' => 15,
                'impression_Post_postId' => 13,
            ],
            [
                'viewId' => 69,
                'viewTimestamp' => '2022-12-18 23:16:02',
                'viewDuration' => 45,
                'isLiked' => true,
                'impression_impressionId' => 22,
                'impression_Post_postId' => 1,
            ],
            [
                'viewId' => 77,
                'viewTimestamp' => '2022-04-01 05:28:32',
                'viewDuration' => 454,
                'isLiked' => true,
                'impression_impressionId' => 16,
                'impression_Post_postId' => 13,
            ]
        ];

        foreach ($views as $view) {
            Views::create($view);
        }
    }
}
