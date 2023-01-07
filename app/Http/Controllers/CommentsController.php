<?php

namespace App\Http\Controllers;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        $postcomments = Comments::all();
        return view('posts', ['posts' => $posts]);
    }

    public function create()
    {
        return view('Features.createcomment');

    }

    public function store(Request $request)
    {

        $comment = new Comments;
        $comment->commentId = $request->commentId;
        $comment->commentText = $request->commentText;
        $comment->view_viewId = $request->view_viewId;
        $comment->user_userId = $request->user_userId;
        $comment->initialCommentId = $request->initialCommentId;
        $comment->save();
        return back();

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

}
