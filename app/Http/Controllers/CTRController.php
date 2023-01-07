<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CTRController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('Features.ctr', ['posts' => $posts]);
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
