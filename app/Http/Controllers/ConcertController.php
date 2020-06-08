<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concert;
use App\Artist;
use App\Ticket;
use App\Country;

class ConcertController extends Controller
{
    public function zoek() {

        /* try { */
            /* Dit zijn de zoek variabelen */
            $zoek = request('zoek');
            $zoekcountry = request('zoekcountry');

            if($zoek != null)
            {
                $artistid = Artist::where('name', 'like', '%' . $zoek . '%')->value('id');
                $artist = Artist::where('name', $zoek)->get();

                if ($zoekcountry == 0)
                {
                    $concert = Concert::where('artist_id', $artistid)->get();
                    $concertid = Concert::where('artist_id', $artistid)->pluck('id');

                    $ticket = Ticket::where('concert_id', $concertid)->get();

                    return view('/concert', 
                [
                    'concert' => $concert,
                    'artist' => $artist,
                    'ticket' => $ticket
                ]);
                }
                else
                {
                    $concert = Concert::where('artist_id',$artistid)->where('country_id',$zoekcountry)->get();
                    error_log($concert = Concert::where('artist_id',$artistid)->where('country_id',$zoekcountry)->get());
                    if ($concert == [])
                    {
                        return redirect('/');
                    }
                    else{
                        $concertid = Concert::where('artist_id',$artistid)->where('country_id',$zoekcountry)->pluck('id');

                        $ticket = Ticket::where('concert_id', $concertid)->get();

                        return view('/concert', 
                        [
                            'concert' => $concert,
                            'artist' => $artist,
                            'ticket' => $ticket
                        ]);
                    }
                }
            }
            else {
                $id = $zoekcountry;
                return redirect()->route('country', ['id' => $id]);
            }
         /*} catch (\exception $e) {
            return view('/error');
        } */
    }
}
