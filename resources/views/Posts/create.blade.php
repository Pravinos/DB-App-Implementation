@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">Create a New Post</h1>
@section('content')
    <br>
    <div class="max-w-5xl mx-auto flex flex-col items-center justify-center">
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="postId" class="block text-white">Id:</label>
        <input type="text" name="postId" id="postId" class="bg-gray-800 text-white"><br>
        <label for="title" class="block text-white">Title:</label>
        <input type="text" name="title" id="title" class="bg-gray-800 text-white"><br>
        <label for="duration" class="block text-white">Duration:</label>
        <input type="text" name="duration" id="duration" class="bg-gray-800 text-white"><br>
        <label for="resolution" class="block text-white">Resolution:</label>
        <input type="text" name="resolution" id="resolution" class="bg-gray-800 text-white"><br>
        <label for="description" class="block text-white">Description:</label>
        <textarea name="description" id="description" class="bg-gray-800 text-white"></textarea><br>  <br>
        <input type="submit" value="Create Post" class="bg-gray-800 text-white">
    </form>
    </div>
    <br>
    <br>
    <div class="max-w-5xl mx-auto flex justify-center">
        <a href="{{ url('/main') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-xl">Return to Homepage</a>
    </div>
    <br>
@endsection

