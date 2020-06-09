<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Song;
use App\Concert;

class ArtistController extends Controller
{
    public function show($id) {
        try {
            if(is_numeric($id))
            {
                $artist = Artist::find($id);
                $artistid = $artist->id;

                $song = Song::where('artist_id',$artistid)->get();

                $concert = Concert::where('artist_id',$artistid)->get();

                return view('artiestdetails', [
                    'artist' => $artist,
                    'song' => $song,
                    'concert' => $concert
                ]);
            }
            else {
                return view ('/error');
            }          
        } catch (\exception $e) {
            return view('/error');
        }
    }
}
