<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $table = 'concert';
    public $timestamps = false;
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
