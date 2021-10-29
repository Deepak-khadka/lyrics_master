<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artist = Artist::all();
        return  view('artist.artist',['artist'=>$artist]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=> 'required','max:30','min:3',
            'bio'=> 'required','max:255','min:10',
        ]);
        $user = new Artist();
        $user->name = $request->input('name');
        $user->bio = $request->input('bio');
       if( $user->save()){
           $artist = Artist::all();

           return  redirect()->route('artist.index');
       }
    }
    public function show(Artist $artist)
    {
        $artist = Artist::find()->$artist;
        return view('artist.show');
    }


    public function edit(Artist $artist)
    {
        //
    }


    public function update(Request $request, Artist $artist)
    {
        //
    }


    public function destroy(Artist $artist)
    {
        //
    }

}
