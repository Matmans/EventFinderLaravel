<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concert;
use App\Artist;
use App\Ticket;
use App\Country;
use App\User;
use App\Fav_artist;
use App\Concert_wishlist;
use auth;

class ConcertController extends Controller
{
    public function zoek() {
        try {
            /* Dit zijn de zoek variabelen */
            $zoek = request('zoek');
            $zoekcountry = request('zoekcountry');

            /* Er is een artiesten naam ingegeven */
            if($zoek != null)
            {
                $artistid = Artist::where('name', 'like', '%' . $zoek . '%')->pluck('id');
                /* Return error als geen artiest gevonden is */
                if(empty($artistid)){
                    return view('/error');
                }
                else
                {
                    $artist = Artist::where('id', $artistid)->first();

                    /* Concerten tonen van alle landen */
                    if ($zoekcountry == 0)
                    {
                        $concert = Concert::where('artist_id', $artistid)->get();

                        if(Auth::check())
                        {
                            $currentuserid = Auth::user()->id;
                            $favartist = Fav_artist::where('user_id',$currentuserid)->where('artist_id',$artistid)->first();
                            $concert_wishlist = Concert_Wishlist::where('user_id',$currentuserid)->get();

                            if (empty($favartist)){
                                $favcheck = 0;
                            }
                            else {
                                $favcheck = 1;
                            }

                            return view('/concert', 
                            [
                                'concert' => $concert,
                                'artist' => $artist,
                                'favcheck' => $favcheck,
                                'concert_wishlist' => $concert_wishlist
                            ]);
                        }
                        else 
                        {
                            $favcheck = 2;

                            return view('/concert', 
                            [
                                'concert' => $concert,
                                'artist' => $artist,
                                'favcheck' => $favcheck,
                            ]);
                        }
                    }
                    /* Concerten tonen van het geselecteerde land */
                    else
                    {
                        $concert = Concert::where('artist_id',$artistid)->where('country_id',$zoekcountry)->get();

                        if(Auth::check())
                        {
                            $currentuserid = Auth::user()->id;
                            $favartist = Fav_artist::where('user_id',$currentuserid)->where('artist_id',$artistid)->first();

                            if (empty($favartist)){
                                $favcheck = 0;
                            }
                            else {
                                $favcheck = 1;
                            }

                            return view('/concert', 
                            [
                                'concert' => $concert,
                                'artist' => $artist,
                                'favcheck' => $favcheck,
                            ]);
                        }
                        else 
                        {
                            $favcheck = 2;

                            return view('/concert', 
                            [
                                'concert' => $concert,
                                'artist' => $artist,
                                'favcheck' => $favcheck,
                            ]);
                        }
                    }
                }
            }
            /* Geen artiesten naam ingegeven, dus openen we de country pagina van het geselecteerde land */
            else {
                /* Als er geen land is geselecteerd, fout terug geven (er is dus niks ingegeven of geselecteerd) */
                if ($zoekcountry == 0)
                {
                    return view('/error');
                }
                else {
                    $id = $zoekcountry;
                    return redirect()->route('country', ['id' => $id]);
                }
            }
        } catch (\exception $e) {
            return view('/error');
        }
    }
}
