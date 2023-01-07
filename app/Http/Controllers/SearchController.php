<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use App\Models\Channels;
use App\Models\AppUsers;

class SearchController extends Controller
{
    public function index()
    {
        $q = $request->input('q');

        $posts = Posts::where('title', 'like', "%$q%")->get();
        $channels = Channels::where('channelName', 'like', "%$q%")->get();
        $users = AppUsers::where('username', 'like', "%$q%")->get();

        $results = $posts->merge($channels)->merge($users);

        return view('main', ['results' => $results]);
    }

    public function create()
    {
        // display form for creating a new item

    }

    public function store(Request $request)
    {
        // validate the request data

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

}
