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
            /* Check of de id een nummer is */
            if(is_numeric($id))
            {
                $artist = Artist::find($id);
                /* Als er geen artiest gevonden is */
                if(empty($artist))
                {
                    return view('/error');
                }
                /* Als er een artiest is gevonden */
                else {
                    $artistid = $artist->id;

                    $song = Song::where('artist_id',$artistid)->get();

                    $concert = Concert::where('artist_id',$artistid)->get();

                    return view('artiestdetails', [
                        'artist' => $artist,
                        'song' => $song,
                        'concert' => $concert
                    ]);
                }
            }
            /* Als de id geen nummer is, error */
            else {
                return view ('/error');
            }          
        } catch (\exception $e) {
            return view('/error');
        }
    }
}
