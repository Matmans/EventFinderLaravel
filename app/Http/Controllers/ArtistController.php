<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Artist;
use App\Song;
use App\Concert;
use App\Fav_artist;
use App\User;
use auth;

class ArtistController extends Controller
{
    /* Haal de data op van de artiest met een bepaalde ID */
    public function show($id) {
        /* Algemene error catch */
        try {
            /* Check of de id een nummer is */
            if(is_numeric($id))
            {
                $artist = Artist::find($id);
                /* Als er geen artiest gevonden is, error */
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
                    /* Artiest Id ophalen */
                    $artistid = $artist->id;

                    /* Songs vinden op basis van artiest id */
                    $song = Song::where('artist_id',$artistid)->get();
                    /* Concerten vinden op basis van artist id */
                    $concert = Concert::where('artist_id',$artistid)->where('date','>',Carbon::now())->orderBy('date')->get();

                    /* Check of gebruiker is ingelogd */
                    if(Auth::check())
                    {
                        /* User ID ophalen */
                        $currentuserid = Auth::user()->id;
                        /* Fav artist list ophalen */
                        $favartist = Fav_artist::where('user_id',$currentuserid)->where('artist_id',$id)->first();
                        
                        /* Als die er niet instaat, 0 waarde terug geven */
                        if (empty($favartist)){
                            $favcheck = 0;
                        }
                        /* Als de er wel instaat, 1 waarde terug geven */
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
                    /* Als de user niet ingelogd is, wordt een 0 waarde terug gegeven op de fav check */
                    else {
                        $favcheck = "";
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
        /* Algemene error catch */
        } catch (\exception $e) {
            $reason = "Something went wrong. Please try again.";
            return view('/error', 
            [
                'reason' => $reason,
            ]);
        }
    }
}
