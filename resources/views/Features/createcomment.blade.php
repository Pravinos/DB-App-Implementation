@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">Create a New Comment</h1>
@section('content')
    <br>
    <div class="max-w-5xl mx-auto flex flex-col items-center justify-center">
        <form method="POST" action="{{ route('comments.store') }}" class="mx-auto">
            @csrf
            <label for="commentId" class="block text-white">Id:</label>
            <input type="text" name="commentId" id="commentId" class="bg-gray-800 text-white"><br>
            <label for="commentText" class="block text-white">Text:</label>
            <textarea name="commentText" id="commentText" class="bg-gray-800 text-white"></textarea><br>
            <label for="initialCommentId" class="block text-white">initialCommentId:</label>
            <input type="text" name="initialCommentId" id="initialCommentId" class="bg-gray-800 text-white"><br>
            <label for="view_viewId" class="block text-white">ViewId:</label>
            <input type="text" name="view_viewId" id="view_viewId" class="bg-gray-800 text-white"><br>
            <label for="user_userId" class="block text-white">UserId:</label>
            <input type="text" name="user_userId" id="user_userId" class="bg-gray-800 text-white"><br><br>
            <input type="submit" value="Create Comment" class="bg-gray-800 text-white">
        </form>
    </div>
    <br>
    <br>
    <div class="max-w-5xl mx-auto flex justify-center">
        <a href="{{ url('/main') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-xl">Return to Homepage</a>
    </div>
    <br>
@endsection

