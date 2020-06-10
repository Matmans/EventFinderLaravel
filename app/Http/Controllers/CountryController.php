<?php

namespace App\Http\Controllers;

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
        try {
            $country = Country::orderBy('name')->get();
            
            return view('/welcome', 
            [
                'country' => $country,
            ]);
        } catch (\exception $e) {
            return view('/error');
        }
    }

    /* Deze functie haalt 1 country op, op basis van ID */
    public function show($id) {
        try {
            /* Checken of de ID een nummer is */
            if(is_numeric($id))
            {
                $country = Country::find($id);
                /* Checken of er een land is gevonden, anders error */
                if(empty($country))
                {
                    return view('/error');
                }
                /* Er is een land gevonden, doorsturen */
                else
                {
                    /* We halen alle concerten en artisten van dit land op */
                    $concert = Concert::where('country_id',$id)->orderBy('date')->get();
                    $artist = Artist::where('country_id',$id)->orderBy('name')->get();
                    if(Auth::check())
                    {
                        $currentuserid = Auth::user()->id;
                        $favartist = Fav_artist::where('user_id',$currentuserid)->get();
                        $concert_wishlist = Concert_wishlist::where('user_id',$currentuserid)->get();

                        error_log($favartist);
                        return view('countrydetails', [
                            'country' => $country,
                            'concert' => $concert,
                            'artist' => $artist,
                            'favartist' => $favartist,
                            'concert_wishlist' => $concert_wishlist,
                        ]);
                    }
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
                return view('/error');
            }
        } catch (\exception $e) {
            return view('/error');
        }
    }
}
