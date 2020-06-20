<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Artist;
use App\Song;
use App\Fav_artist;

use auth;

class GenreController extends Controller
{
    public function show($id) {
        try {
            /* Checken of de ID een nummer is */
            if(is_numeric($id))
            {
                /* Genre zoeken op basis van ID */
                $genre = Genre::find($id);
                /* Checken of er een genre is gevonden, anders error */
                if(empty($genre))
                {
                    $reason = "No genre found";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                /* Er is een genre gevonden, doorsturen */
                else
                {
                    /* We halen alle artiesten en songs van dit genre op */
                    
                    $artist = Artist::where('genre_id',$id)->orderBy('name')->get();
                    $song = Song::where('genre_id',$id)->orderBy('artist_id')->get();
                    /* Check of de user ingelogd is */
                    if(Auth::check())
                    {
                        /* User ID ophalen */
                        $currentuserid = Auth::user()->id;
                        /* Favorieten lijst ophalen */
                        $favartist = Fav_artist::where('user_id',$currentuserid)->get();

                        return view('genredetails', [
                            'genre' => $genre,
                            'artist' => $artist,
                            'song' => $song,
                            'favartist' => $favartist,
                        ]);
                    }
                    /* Als de user niet ingelogd is, geven we lege records mee om errors te verkomen */
                    else
                    {
                        $favartist = [];

                        return view('genredetails', [
                            'genre' => $genre,
                            'artist' => $artist,
                            'song' => $song,
                            'favartist' => $favartist,
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
