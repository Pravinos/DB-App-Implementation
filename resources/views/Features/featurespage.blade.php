@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">APPLICATION FEATURES</h1>
@section('content')
<br>
    <br>
    <div class="max-w-5xl mx-auto flex flex-col items-center justify-center">
        <ul class="list-none p-0">
            <li class="my-4">
                <a href="{{ url('/features/userfinder') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-4xl">USER FINDER</a>
            </li>  <br>
            <li class="my-4">
                <a href="{{ url('/features/ctr') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-4xl">CTR</a>
            </li>  <br>
            <li class="my-4">
                <a href="{{ url('/features/reclikes') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-4xl">RECOMMENDED LIKES</a>
            </li>  <br>
        </ul>
        <br>
        <br>
        <br>
        <div class="my-4">
            <a href="{{ url('/main') }}" class="btn btn-success mx-2 rounded-full shadow-md px-4 py-2 text-xl">Return to Homepage</a>
        </div>
    </div>


@endsection
