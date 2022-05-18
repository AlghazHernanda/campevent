<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\LoveWishlist;
use App\Models\User;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wishlist', [
            "events" => Event::all()
        ]);
    }

    public function listEvent()
    {
        return view('listevent', [
            "events" => Event::all()
        ]);
    }

    public function loveWishlist(Request $request, Event $event, User $user, LoveWishlist $love)
    {
        $request->event_id = $event->id;
        $request->user_id = auth()->user()->id;
        LoveWishlist::create([
            'event_id' => $request->event_id,
            'user_id' => $request->user_id
        ]);
        return redirect('/wishlist')->with('success', 'event has Been deleted');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
