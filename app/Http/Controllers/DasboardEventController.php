<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DasboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registerevent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'eventType' => 'required',
            'eventTheme' => 'required',
            // 'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024', //maksudnya maksimal file nya 1024 kilobyte ata 1 mb
            'desc' => 'required',
            'date' => 'required',
            'speaker' => 'required',
            'price' => 'required',
            // 'published_at' => 'required',
        ]);

        //logika untuk multi checkbox
        if (!empty($request->input('eventTheme'))) {
            $validatedData['eventTheme'] = join(',', $request->input('eventTheme'));
        } else {
            $validatedData['eventTheme'] = '';
        }

        //jika ada gambar yang di upload
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images'); //maka simpan di dalam storage/app/post-images
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['category_id'] = auth()->user()->id;
        //$validatedData['published_at'] = $validatedData['created_at'];


        //dd($validatedData);



        Event::create($validatedData);

        return redirect('/')->with('success', 'New Post has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
