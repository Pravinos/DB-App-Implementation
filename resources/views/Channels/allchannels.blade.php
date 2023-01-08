@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">CHANNELS</h1>
@section('content')
<div class="max-w-5xl mx-auto px-4 py-6 bg-gray-900 rounded-lg shadow-xl text-white">
    <ul class="list-none">
        @foreach($channels as $channel)
            <div class="border-b-2 border-500 p-4">
                <ul class="list-none">
                    <li class="mb-2"><span class="font-bold">Id:</span> {{ $channel->channelId }}</li>
                    <li class="mb-2"><span class="font-bold">Channel Name:</span> {{ $channel->channelName }}</li>
                    <li class="mb-2"><span class="font-bold">Creation Date:</span> {{ $channel->creationDate }}</li>
                    <li class="mb-2"><span class="font-bold">Description:</span> {{ $channel->channelDescription }}</li>
                    <li class="mb-2"><span class="font-bold">Owner Id:</span> {{ $channel->User_userId }}</li>
                </ul>
            </div>
        @endforeach
    </ul>
</div>

    <br>
    <br>
    <div class="max-w-5xl mx-auto flex justify-center">
        <a href="{{ url('/main') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-xl">Return to Homepage</a>
    </div>
    <br>

@endsection
