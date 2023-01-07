<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channels;
use Illuminate\Support\Facades\DB;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channels::all();

        return view('Channels.allchannels', compact('channels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Channels.createchannel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $channel = new Channels;
        $channel->channelId = $request->channelId;
        $channel->channelName = $request->channelName;
        $channel->creationDate = $request->creationDate;
        $channel->channelDescription = $request->channelDescription;
        $channel->save();

        return redirect('channels')->with('success', 'Channel created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $channel = Channels::findOrFail($id);

        return view('channels.show', compact('channel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $channel = Channels::findOrFail($id);

        return view('channels.edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:channels|max:255',
            'description' => 'required',
        ]);

        $channel = Channel::findOrFail($id);
        $channel->name = $request->name;
        $channel->description = $request->description;
        $channel->save();

        return redirect('/channels')->with('success', 'Channel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $channel = Channels::findOrFail($id);
        $channel->delete();
        return redirect('/channels')->with('success', 'Channel deleted successfully');
    }
}
