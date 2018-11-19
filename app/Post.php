<?php

namespace Sisme;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	//protected $guarded=['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
