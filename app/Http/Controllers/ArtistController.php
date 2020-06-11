<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Song;
use App\Concert;
use App\Fav_artist;
use App\User;
use auth;

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
                    $reason = "No artist found";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                /* Als er een artiest is gevonden */
                else {
                    $artistid = $artist->id;

                    $song = Song::where('artist_id',$artistid)->get();

                    $concert = Concert::where('artist_id',$artistid)->orderBy('date')->get();

                    if(Auth::check())
                    {
                        $currentuserid = Auth::user()->id;
                        $favartist = Fav_artist::where('user_id',$currentuserid)->where('artist_id',$id)->first();
                        
                        if (empty($favartist)){
                            $favcheck = 0;
                        }
                        else {
                            $favcheck = 1;
                        }

                        return view('artiestdetails', [
                            'artist' => $artist,
                            'song' => $song,
                            'concert' => $concert,
                            'favcheck' => $favcheck
                        ]);
                    }
                    else {
                        $favcheck = 2;
                        return view('artiestdetails', [
                            'artist' => $artist,
                            'song' => $song,
                            'concert' => $concert,
                            'favcheck' => $favcheck
                        ]);
                    }
                }
            }
            /* Als de id geen nummer is, error */
            else {
                $reason = "Wrong parameters";
                return view('/error', 
                [
                    'reason' => $reason,
                ]);
            }          
        } catch (\exception $e) {
            $reason = "Something went wrong. Please try again.";
            return view('/error', 
            [
                'reason' => $reason,
            ]);
        }
    }
}
