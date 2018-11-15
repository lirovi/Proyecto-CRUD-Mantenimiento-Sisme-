<?php

namespace Sisme;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $guarded=['id'];

   public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
