<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comments;


class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            ['commentId' => 1, 'commentText' => 'Nice video !', 'view_viewId' => 658, 'initialCommentId' => null, 'user_userId' => 1],
            ['commentId' => 2, 'commentText' => 'Thats my favourite song for sure', 'view_viewId' => 231, 'initialCommentId' => null, 'user_userId' => 2],
            ['commentId' => 3, 'commentText' => 'Loved the vlog , cant wait for the next one ', 'view_viewId' => 753, 'initialCommentId' => null, 'user_userId' => 3],
            ['commentId' => 24, 'commentText' => 'Bro stop hating on my guy', 'view_viewId' => 1651, 'initialCommentId' => 18, 'user_userId' => 54],
            ['commentId' => 99, 'commentText' => 'This is so bad xd ', 'view_viewId' => 326, 'initialCommentId' => 77, 'user_userId' => 55],
            ['commentId' => 100, 'commentText' => 'this guy is nuts', 'view_viewId' => 77, 'initialCommentId' => null, 'user_userId' => 6],
            ['commentId' => 101, 'commentText' => 'messi is the goat', 'view_viewId' => 69, 'initialCommentId' => null, 'user_userId' => 1],
            ['commentId' => 102, 'commentText' => 'lol', 'view_viewId' => 69, 'initialCommentId' => 101, 'user_userId' => 1],
        ];

        foreach ($comments as $comment) {
            Comments::create($comment);
        }
    }
}
