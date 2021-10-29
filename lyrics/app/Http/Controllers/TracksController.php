<?php

namespace App\Http\Controllers;

use App\Tracks;
use Illuminate\Http\Request;

class TracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tracks.track');
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
     * @param  \App\Tracks  $tracks
     * @return \Illuminate\Http\Response
     */
    public function show(Tracks $tracks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tracks  $tracks
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracks $tracks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tracks  $tracks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracks $tracks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tracks  $tracks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracks $tracks)
    {
        //
    }
}
