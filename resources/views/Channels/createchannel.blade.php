@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">Create Channel</h1>
@section('content')
<br>
<div class="max-w-5xl mx-auto flex flex-col items-center justify-center">
    <div class="max-w-5xl mx-auto flex flex-col items-center justify-center">
        <form action="/channels" method="POST" class="mx-auto">
            @csrf
            <div>
                <label for="channelId" class="block text-white">Id:</label>
                <input type="text" name="channelId" id="channelId" class="bg-gray-800 text-white"><br>
            </div>
            <div>
                <label for="channelName" class="block text-white">Name:</label>
                <input type="text" name="channelName" id="channelName" value="{{ old('channelName') }}" class="bg-gray-800 text-white">
            </div>
            <div>
                <label for="channelDescription" class="block text-white">Description:</label>
                <textarea type="text" name="channelDescription" id="channelDescription" value="{{ old('channelDescription') }}" class="bg-gray-800 text-white"></textarea>
            </div>
            <div>
                <label for="creationDate" class="block text-white">Creation Date:</label>
                <input type="text" name="creationDate" id="creationDate" value="{{ old('creationDate') }}" class="bg-gray-800 text-white">
            </div>
            <div>
                <label for="User_userId" class="block text-white">Owner Id:</label>
                <input type="text" name="User_userId" id="User_userId" value="{{ old('User_userId') }}" class="bg-gray-800 text-white">
            </div><br>
            <input type="submit" value="Create Post" class="bg-gray-800 text-white">
    </form>
</div>
    <br>
    <div class="max-w-5xl mx-auto flex justify-center">
        <a href="{{ url('/main') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-xl">Return to Homepage</a>
    </div>
    <br>
@endsection

