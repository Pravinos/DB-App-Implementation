@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">USER FINDER TEST</h1>
@section('content')
<style>
    form {
        display: flex;
        flex-direction: column;
    }

    form label {
        font-weight: bold;
        color: white;
    }

    form input,
    form select {
        padding: 0.5em;
        margin: 0.5em 0;
        background-color: #232323;
        border: none;
        border-radius: 4px;
        color: white;
    }

    form button[type="submit"] {
        padding: 0.5em 1em;
        margin: 0.5em 0;
        background-color: #232323;
        border: none;
        border-radius: 4px;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }
</style>
<form method="GET" action="/search">
    {{-- <label for="userId">User ID:</label>
    <input type="text" name="userId" id="userId"> --}}
{{--
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"> --}}
    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
        <option value=""></option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="both">Both Genders</option>
    </select>
    <label for="country">Country:</label>
    <input type="text" name="country" id="country">
    <label for="yearOfBirth">Year of Birth:</label>
    <select name="yearOfBirthOperator" id="yearOfBirthOperator">
        <option value=">">Born After</option>
        <option value="<">Born Before</option>
    </select>
    <input type="text" name="yearOfBirth" id="yearOfBirth">
    <br><br>
    <button type="submit">Search</button>
    <br><br><br><br><br><br>
    <div class="max-w-5xl mx-auto flex justify-center">
        <a href="{{ url('/features/userfinder/test') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-xl">User Finder Test</a>
    </div>
</form>

@endsection
