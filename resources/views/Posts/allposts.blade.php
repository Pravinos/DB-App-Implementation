@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">POSTS</h1>
@section('content')
    <ul>
        <div class="max-w-5xl mx-auto px-4 py-6 bg-gray-900 rounded-lg shadow-xl text-white">
            @foreach($posts as $post)
                <div class="border-b-2 border-500 p-4">
                    <h2 class="text-2xl font-bold mb-4">{{ $post->title }}</h2>
                    <ul class="list-none">
                        <li class="mb-2"><span class="font-bold">Id:</span> {{ $post->postId }}</li>
                        <li class="mb-2"><span class="font-bold">Duration:</span> {{ $post->duration }}</li>
                        <li class="mb-2"><span class="font-bold">Resolution:</span> {{ $post->resolution }}</li>
                        <li class="mb-2"><span class="font-bold">Description:</span> {{ $post->description }}</li>
                        <li class="mb-2"><span class="font-bold">Views:</span> {{ getViewsCountForPost($post->postId) }}</li>
                    </ul>
                    <ul class="list-none">
                        <ul class="list-none">
                            @forelse(getCommentsForPost($post->postId) as $comment)
                                @if($loop->first)
                                    <h2 class="text-2xl font-bold mb-4">Comments:</h2>
                                @endif
                                <li class="mb-2"><span class="font-bold">{{ $comment->commentId }}: </span>{{ $comment->commentText }}</li>
                            @empty
                                <p>No comments for this post</p>
                            @endforelse
                        </ul>
                        <div class="max-w-5xl mx-auto flex justify-center">
                            <a href="{{ url('comments/create') }}" class="btn btn-success mx-2 rounded-full shadow-md px-4 py-2 text-xl">Create a Comment</a>
                        </div>
                    </ul>
                </div>
            @endforeach
        </div>
    </ul>
    <br>
    <br>
    <div class="max-w-5xl mx-auto flex justify-center">
        <a href="{{ url('/main') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-xl">Return to Homepage</a>
    </div>
    <br>

@endsection
