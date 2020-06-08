<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artist';

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
