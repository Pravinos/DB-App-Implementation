<?php

use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use App\Models\Comments;

if (!function_exists('getGreekOver18')){
    function getGreekOver18($year){
        return DB::table('app_users')->select('username', 'yearOfBirth', 'gender')->where('country', 'Greece')->where('yearOfBirth', '<', $year - 18)->get();

        }
}

if (!function_exists('getViewsCountForPost')){
    function getViewsCountForPost($postId){
        $views = DB::select("SELECT `posts`.`postId` AS `postId`, COUNT(`views`.`viewId`) AS `Views`
            FROM ((`posts` LEFT JOIN `impressions` ON ((`posts`.`postId` = `impressions`.`Post_postId`)))
            LEFT JOIN `views` ON ((`impressions`.`impressionId` = `views`.`impression_impressionId`)))
            WHERE `posts`.`postId` = :postId
            GROUP BY `posts`.`postId`", ['postId' => $postId]);

        return $views[0]->Views;
    }
}

if (!function_exists('getCTR')){
    function getCTR($postId){
        // Get the number of impressions for the given post
        $impressions = DB::table('impressions')
            ->where('Post_postId', $postId)
            ->count();

        // Get the number of views for the given post
        $views = DB::table('views')
            ->join('impressions', 'impressions.impressionId', '=', 'views.impression_impressionId')
            ->where('impressions.Post_postId', $postId)
            ->count();

        // Calculate the CTR
        if ($impressions > 0) {
            return $views / $impressions;
        } else {
            return 0;
        }
    }
}

if (!function_exists('recommendedLikes')){
    function recommendedLikes()
    {
        $results = DB::table('impressions')
            ->join('views', 'impressions.impressionId', '=', 'views.impression_impressionId')
            ->select('impressions.impressionId as impressionId')
            ->where('impressions.isRecommended', 1)
            ->where('views.isLiked', 1)
            ->get();

        return $results;

    }
}

if (!function_exists('getCommentsForPost')){
    function getCommentsForPost($postId){
        $comments = Comments::join('views', 'views.viewId', '=', 'comments.view_viewId')
        ->select('comments.commentId', 'comments.commentText', 'views.impression_Post_postId as postId')
        ->where('views.impression_Post_postId', $postId)
        ->get();

        return $comments;

    }
}


// if (!function_exists('SearchBar')){
//     function SearchBar(){
//         $q = $request->input('q');

//         $posts = Posts::where('title', 'like', "%$q%")->get();
//         $channels = Channels::where('channelName', 'like', "%$q%")->get();
//         $users = AppUsers::where('username', 'like', "%$q%")->get();

//         $results = $posts->merge($channels)->merge($users);

//         return view('main', ['results' => $results]);
// }}
