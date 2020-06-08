<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Concert;

class CountryController extends Controller
{
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

    public function show($id) {
        /* try { */
            $country = Country::find($id);
            $concert = Concert::where('country_id',$id)->get();

            return view('countrydetails', [
                'country' => $country,
                'concert' => $concert
            ]);
        /* } catch (\exception $e) {
            return view('/');
        } */
    }
}
