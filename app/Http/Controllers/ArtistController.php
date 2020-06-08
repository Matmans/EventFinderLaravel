<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Song;

class ArtistController extends Controller
{
    public function show($id) {
        try {
            $artist = Artist::find($id);
            $artistid = $artist->id;

            $song = Song::where('artist_id',$artistid)->get();

            return view('artiestdetails', [
                'artist' => $artist,
                'song' => $song
            ]);
        } catch (\exception $e) {
            return view('/');
        }
    }
}
