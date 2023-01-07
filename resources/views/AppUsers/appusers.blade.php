@extends('Posts.layout')
<h1 class="text-5xl font-bold flex justify-center">REGISTERED USERS</h1>
@section('content')
<br>
<div class="max-w-5xl mx-auto px-4 py-6 bg-gray-900 rounded-lg shadow-xl text-white">
    <ul class="list-none">
        @foreach($appusers as $appuser)
            <div class="border-b-2 border-500 p-4">
                <ul class="list-none">
                    <li class="mb-2"><span class="font-bold">Id:</span> {{ $appuser->userId }}</li>
                    <li class="mb-2"><span class="font-bold">Username:</span> {{ $appuser->username }}</li>
                    <li class="mb-2"><span class="font-bold">Year Of Birth:</span> {{ $appuser->yearOfBirth }}</li>
                    <li class="mb-2"><span class="font-bold">Gender:</span>
                        @if($appuser->gender == 0)
                            Male
                        @else
                            Female
                        @endif
                    </li>
                    <li class="mb-2"><span class="font-bold">Country:</span> {{ $appuser->country }}</li>
                </ul>
            </div>
        @endforeach
    </ul>
</div>

    <br>

    </ul>
        </tbody>
    </table>
    <br>
    <div class="max-w-5xl mx-auto flex justify-center">
        <a href="{{ url('/main') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-xl">Return to Homepage</a>
    </div>
    <br>

@endsection
