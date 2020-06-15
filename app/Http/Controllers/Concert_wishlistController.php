<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Concert;
use App\Concert_wishlist;
use auth;

class Concert_wishlistController extends Controller
{
    /* Concert toevoegen aan wishlist */
    public function check($concert_id) {
        /* Algemene error catch */
        try {
            /* Check of er een id is meegegeven */
            if(is_numeric($concert_id))
            {
                /* Check of concert effectief bestaat */
                $checkconcert = Concert::where('id',$concert_id)->first();
                /* Zo niet, foutmelding */
                if(empty($checkconcert))
                {
                    $reason = "Concert bestaat niet";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                /* als concert bestaat */
                else
                {
                    /* check of de user ingelogd is */
                    if(Auth::check())
                    {
                        /* user id ophalen */
                        $currentuserid = Auth::user()->id;
                        /* Check of concert nog niet in de list zit*/
                        $Concert_wishlist = Concert_wishlist::where('user_id',$currentuserid)->where('concert_id',$concert_id)->first();
                        /* Als deze er niet in zit, toevoegen */
                        if (empty($favconcert))
                        {
                            $Concert_wishlist = new Concert_wishlist;

                            $Concert_wishlist->concert_id = $concert_id;
                            $Concert_wishlist->user_id = $currentuserid;
                            $Concert_wishlist->save();

                            return redirect('/home');
                        }
                        /* Anders foutmelding */
                        else {
                            $reason = "This concert is already on your wishlist";
                            return view('/error', 
                            [
                                'reason' => $reason,
                            ]);
                        }
                    }
                    /* Gebruiker is niet ingelogd */
                    else
                    {
                        $reason = "You aren't logged in.";
                        return view('/error', 
                        [
                            'reason' => $reason,
                        ]);
                    }
                }        
            }
            /* Er is geen ID meegegeven */
            else {
                $reason = "Wrong parameters.";
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

    /* Concert verwijderen uit wishlist */
    public function delete($concert_id) {
        try {
            if(is_numeric($concert_id))
            {
                /* Check of concert effectief bestaat */
                $checkconcert = Concert::where('id',$concert_id)->first();
                /* Zo niet, foutmelding */
                if(empty($checkconcert))
                {
                    $reason = "Concert bestaat niet";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                /* als concert bestaat */
                else
                {
                    /* Check of gebruiker ingelogd is */
                    if (Auth::check())
                    {
                        /* User ID ophalen */
                        $currentuserid = Auth::user()->id;
                        /* Check of concert in de wishlist bestaat */
                        $Concert_wishlist = Concert_wishlist::where('user_id',$currentuserid)->where('concert_id',$concert_id)->first();
                        /* Zo niet, error */
                        if (empty($Concert_wishlist))
                        {
                            $reason = "Concert is not on your wishlist.";
                            return view('/error', 
                            [
                                'reason' => $reason,
                            ]);
                        }
                        /* Anders, verwijderen */
                        else {
                            $Concert_wishlist->delete();
                            return redirect('/home');
                        }
                    }
                    /* Gebruiker is niet ingelogd, error */
                    else{
                        $reason = "You aren't logged in";
                        return view('/error', 
                        [
                            'reason' => $reason,
                        ]);
                    }
                }        
            }
            /* Geen ID meegegeven */
            else {
                $reason = "Wrong parameters.";
                return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
            }
        /* Algemene error catch */
        } catch (\exception $e) {
            $reason = "Something went wrong";
            return view('/error', 
            [
                'reason' => $reason,
            ]);
        }
    }
}
