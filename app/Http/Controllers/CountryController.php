<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Country;
use App\Concert;
use App\Artist;
use App\User;
use App\Fav_artist;
use App\Concert_Wishlist;
use auth;

class CountryController extends Controller
{
    /* Deze functie haalt alle landen op voor de select op de start pagina */
    public function zoek() {
        /* Algemene error catch */
        try {
            /* Alle landen ophalen */
            $country = Country::orderBy('name')->get();
            
            return view('/welcome', 
            [
                'country' => $country,
            ]);
        /* Algemene error catch */
        } catch (\exception $e) {
            $reason = "Could not reach database";
            return view('/error', 
            [
                'reason' => $reason,
            ]);
        }
    }

    /* Deze functie haalt 1 country op, op basis van ID */
    public function show($id) {
        try {
            /* Checken of de ID een nummer is */
            if(is_numeric($id))
            {
                /* Land zoeken op basis van ID */
                $country = Country::find($id);
                /* Checken of er een land is gevonden, anders error */
                if(empty($country))
                {
                    $reason = "No country found";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                /* Er is een land gevonden, doorsturen */
                else
                {
                    /* We halen alle concerten en artisten van dit land op */
                    $concert = Concert::where('country_id',$id)->where('date','>',Carbon::now())->orderBy('date')->get();
                    $artist = Artist::where('country_id',$id)->orderBy('name')->get();
                    /* Check of de user ingelogd is */
                    if(Auth::check())
                    {
                        /* User ID ophalen */
                        $currentuserid = Auth::user()->id;
                        /* Favorieten lijst ophalen */
                        $favartist = Fav_artist::where('user_id',$currentuserid)->get();
                        /* Concert wishlist ophalen */
                        $concert_wishlist = Concert_wishlist::where('user_id',$currentuserid)->get();

                        return view('countrydetails', [
                            'country' => $country,
                            'concert' => $concert,
                            'artist' => $artist,
                            'favartist' => $favartist,
                            'concert_wishlist' => $concert_wishlist,
                        ]);
                    }
                    /* Als de user niet ingelogd is, geven we lege records mee om errors te verkomen */
                    else
                    {
                        $favartist = [];
                        $concert_wishlist = [];

                        return view('countrydetails', [
                            'country' => $country,
                            'concert' => $concert,
                            'artist' => $artist,
                            'favartist' => $favartist,
                            'concert_wishlist' => $concert_wishlist,
                        ]);
                    }
                }
            }
            /* Iemand heeft een id ingegeven die geen nummer is, error pagina */
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
