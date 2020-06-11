<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
    public function show($id) {
        try {
            /* Checken of er een nummer is ingegeven als id */
            if(is_numeric($id))
            {
                $song = Song::find($id);
                /* Als er geen nummer bestaat met deze id, foutmelding */
                if(empty($song))
                {
                    $reason = "Song does not exist.";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                /* Als er wel een nummer is gevonden, doorsturen */
                else {
                    return view('songdetails', [
                        'song' => $song
                    ]);
                }
            }
            /* Iemand probeert grappig te zijn en geeft zelf een id in zonder letters, dus terugsturen naar de error pagina */
            else {
                $reason = "Wrong parameters.";
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
