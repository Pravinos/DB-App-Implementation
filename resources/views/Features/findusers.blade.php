@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">USER FINDER</h1>
@section('content')
<br>
<br>
    <br>
    <h1 class="text-4xl font-bold flex justify-center">Users from Greece who are over 18 years old</h1>
    <br>
        <div class="max-w-5xl mx-auto px-4 py-6 bg-gray-900 rounded-lg shadow-xl text-white">
            <ul class="list-none">
                @foreach(getGreekOver18(2022) as $user)
                    <div class="border-b-2 border-500 p-4">
                        <ul class="list-none">
                            <li class="mb-2"><span class="font-bold">Username:</span> {{ $user->username }}</li>
                            <li class="mb-2"><span class="font-bold">Year Of Birth:</span> {{ $user->yearOfBirth }}</li>
                            <li class="mb-2"><span class="font-bold">Gender:</span>
                                @if($user->gender == 0)
                                    Male
                                @else
                                    Female
                                @endif
                            </li>
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
    </div>
    <br>

@endsection
