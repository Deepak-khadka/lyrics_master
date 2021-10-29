<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = "artist";
    protected $fillable = [
          'id','name','bio'
    ];
    public function album()
    {
        return $this->hasMany('App\Album');
    }

}
