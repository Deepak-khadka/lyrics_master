<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genre";
    protected $fillable = [
       'id','name','created_at','updated_at'
    ];
    public function album()
    {
        return $this->hasMany('App\Album');
    }
}
