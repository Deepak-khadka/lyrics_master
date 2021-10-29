<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "album";
    protected $fillable = [
         'artist_id','genre_id','title','release_year'
    ];
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
    public function tracks()
    {
        return $this->hasMany('App\Tracks');
    }
}
