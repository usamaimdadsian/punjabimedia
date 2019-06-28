<?php

namespace App;

use stdClass;
use App\Video;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function video()
    {
        return $this->belongsTo('App\Video');
    }

    public function scopegetRating($query,Video $video)
    {
        $object=new stdClass;
        $value=0;
        $object->rating=0;
        $ratings=$video->ratings;
        if(sizeof($ratings) !== 0)
        {
            foreach ($ratings as $rating) {
                $value+=$rating->value;
            }
            $object->rating=$value/sizeof($ratings);
        }
        $object->video_id=$video->id;
        $object->times=sizeof($ratings);
        return $object;
    }
}
