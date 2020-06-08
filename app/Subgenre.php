<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgenre extends Model
{
    protected $table = 'subgenre';
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
