<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Event;
use App\Models\EventType;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', [
            'events' => Event::all(), //dimana user_id nya sama kyk user id yang login
            'contact' => Contact::all(),
        ]);
    }

    public function requestevent()
    {
        return view('requestevent', [
            'events' => Event::all(), //dimana user_id nya sama kyk user id yang login
            'contact' => Contact::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('eventadmin', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //echo("halo");
        return view('coba_admin.accept', [
            'event' => $event,
            'eventTypes' => EventType::all()
        ]);
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
        $rules = [
            'title' => 'required|max:255',
            // 'published_at' => 'required',
        ];

        $validatedData = $request->validate($rules);

        // //logika untuk multi checkbox
        // if (!empty($request->input('eventTheme'))) {
        //     $validatedData['eventTheme'] = join(',', $request->input('eventTheme'));
        // } else {
        //     $validatedData['eventTheme'] = '';
        // }

        //jika ada gambar yang di upload

        //$validatedData['image'] = $request->file('image')->store('post-images'); //maka simpan di dalam post-images


        //$validatedData['user_id'] = auth()->user()->id;
        //$validatedData['category_id'] = $validatedData['eventType'];
        $validatedData['status'] = "accepted";

        Event::where('id', $event->id)->update($validatedData);

        return redirect('/admin')->with('success', 'Event has Been Updated');
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
