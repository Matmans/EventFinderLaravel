<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Artist;
use App\Fav_artist;
use auth;

class Fav_artistController extends Controller
{
    /* Artiesten toevoegen aan favorieten */
    public function check($artist_id) {
        /* Algemene error catch */
        try {
            /* Check of er effectief een ID is meegegeven */
            if(is_numeric($artist_id))
            {
                /* Check of de artiest effectief bestaat */
                $checkartist = Artist::where('id',$artist_id)->first();
                /* Zo niet geeft dit een error */
                if(empty($checkartist))
                {
                    $reason = "This artist does not exist.";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                /* Anders verder */
                else
                {
                    /* Check of de gebruiker ingelogd is */
                    if(Auth::check())
                    {
                        /* User ID ophalen */
                        $currentuserid = Auth::user()->id;

                        /* Check of deze artiest nog niet in de fav list zit */
                        $favartist = Fav_artist::where('user_id',$currentuserid)->where('artist_id',$artist_id)->first();

                        /* Zo niet wordt deze toegevoegd */                        
                        if (empty($favartist))
                        {
                            $fav_artist = new Fav_artist;
    
                            $fav_artist->artist_id = $artist_id;
                            $fav_artist->user_id = $currentuserid;
                            $fav_artist->save();

                            /* Terugsturen naar hun profiel */
                            return redirect('/home');
                        }
                        /* Als deze artiest al een fav is, error geven */
                        else {
                            $reason = "Artist is already a favorite of yours.";
                            return view('/error', 
                            [
                                'reason' => $reason,
                            ]);
                        }
                    }
                    /* Als de gebruiker niet ingelogd is, error */
                    else{
                        $reason = "You aren't logged in.";
                        return view('/error', 
                        [
                            'reason' => $reason,
                        ]);
                    }
                }   
            }
            /* Er is geen id meegegeven, error */
            else
            {
                $reason = "Wrong parameters";
                return view('/error', 
                [
                    'reason' => $reason,
                ]);
            }
        /* Algemene error catch */
        } catch (\exception $e) {
            $reason = "Something went wrong. Try again.";
            return view('/error', 
            [
                'reason' => $reason,
            ]);
        }
    }

    /* Favoriete artiesten verwijderen */
    public function delete($artist_id) {
        /* Algemene error catch */
        try {
            /* Check of er effectief een ID is meegegeven */
            if(is_numeric($artist_id))
            {
                /* Check of artiest effectief bestaat */
                $checkartist = Artist::where('id',$artist_id)->first();
                /* Zo niet, foutmelding */
                if(empty($checkartist))
                {
                    $reason = "Artist doesnt exist.";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                /* Anders, doorgaan */
                else
                {
                    /* Check of de gebruiker ingelogd is */
                    if(Auth::check())
                    {
                        /* User ID ophalen */
                        $currentuserid = Auth::user()->id;
                        /* Kijken of artiest in de fav list zit */
                        $favartist = Fav_artist::where('user_id',$currentuserid)->where('artist_id',$artist_id)->first();

                        /* Als deze niet in de list zit, error */
                        if (empty($favartist))
                        {
                            $reason = "Artist isn't on your favorites list.";
                            return view('/error', 
                            [
                                'reason' => $reason,
                            ]);
                        }
                        /* Als deze in de list zit, verwijderen */
                        else {
                            $favartist->delete();
                            return redirect('/home');
                        }
                    }
                    /* Gebruiker is niet ingelogd, error */
                    else{
                        $reason = "You aren't logged in.";
                        return view('/error', 
                        [
                            'reason' => $reason,
                        ]);
                    }
                }
            }
            /* Er is geen ID meegegeven */
            else
            {
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
