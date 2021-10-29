<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracks extends Model
{
    protected $table = "tracks";
    protected $fillable = [
           'album_id'
    ];
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
