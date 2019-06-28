<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function videos()
    {
        return $this->belongsToMany('App\Video','videos_actors','actor_id','video_id');
    }
}
