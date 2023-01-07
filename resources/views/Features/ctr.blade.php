@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">CLICK THROUGH RATE</h1>
@section('content')
<br>
@if(isset($posts))
<div class="max-w-5xl mx-auto px-4 py-6 bg-gray-900 rounded-lg shadow-xl text-white">
    <ul class="list-none">
        @foreach($posts as $post)
            <div class="border-b-2 border-500 p-4">
                <ul class="list-none">
                    <li class="mb-2"><span class="font-bold">Post:</span> {{ $post->title }}</li>
                    <li class="mb-2"><span class="font-bold">CTR:</span> {{ getCTR($post->postId) }}</li>
                </ul>
            </div>
        @endforeach
    </ul>
</div>
    @endif
        <br>
        <div class="max-w-5xl mx-auto flex justify-center">
            <a href="{{ url('/main') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-xl">Return to Homepage</a>
        </div>
    </div>
    <br>

@endsection
