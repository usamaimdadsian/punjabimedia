<?php

namespace App;

use stdClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Video extends Model
{
    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'videos_actors', 'video_id', 'actor_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function scopevideosWithRatings($query,$videos)
    {
        $array=array();
        foreach ($videos as $video) {
            $object = new stdClass();
            $object=$video;
            $object->rating=Rating:: getRating($video)->rating;
            $array[]=$object;
        }
        return $array;
    }

    public function scopevideosTopRated($query,$number)
    {
        $videos=Video::all();
        $array = array();
        $videos_array=array();
        $video_array=array();
        foreach ($videos as $video) {
            $array[] = Rating::getRating($video);
        }
        usort($array, function ($a, $b) {
            return $a->rating < $b->rating;
        });
        foreach ($videos as $video) {
            $videos_array[]=$video;
        }
        for ($i=0; $i<$number; $i++)
        {
            if($i < sizeof($array))
            {
                $searchedValue=$array[$i]->video_id;
                $rating= $array[$i]->rating;
                $neededObject = array_filter(
                    $videos_array,
                    function ($e) use (&$searchedValue) {
                        return $e->id == $searchedValue;
                    }
                );
                $object=new stdClass;
                $object= reset($neededObject);
                $object->rating= $rating;
                $video_array[]=$object;
            }
        }
        return $video_array;
    }

    public function scopeadvancedSearch($query,$search)
    {
        $actor_videos=array();
        $desired_videos=array();
        $videos=Video::where('name','LIKE',"%$search%")->orWhere('description','LIKE',"%$search%")
        ->orWhere('name','sounds like',"%$search%")->orWhere('description', 'sounds like', "%$search%")->get()->all();
        $actors=Actor::where('name','LIKE',"%$search%")->orWhere('name','sounds like',"%$search%")->get();
        foreach ($actors as $actor) {
            $act_vids=$actor->videos;
            foreach ($act_vids as $vid) {
                $actor_videos[]=$vid;
            }
        }
        $videos=array_merge($videos,$actor_videos);
        foreach ($videos as $video) {
            $flag=0;
            if( !empty($desired_videos))
            {
                foreach ($desired_videos as $dv) {
                    if($dv->id == $video->id)
                    {
                        $flag=1;
                        break;
                    }
                }
            }
            if($flag ==0)
            {
                $desired_videos[]=$video;
            }
        }
        return collect($desired_videos);
    }

    public function scopepaginator($query,$videos,$per_page)
    {
        $current_page = LengthAwarePaginator::resolveCurrentPage();
        $videos = collect($videos);
        $currentPageItems = $videos->slice(($current_page * $per_page) - $per_page, $per_page)->all();
        $videos = new LengthAwarePaginator($currentPageItems, count($videos), $per_page);
        $videos->setPath($request->url());
        return $videos;
    }
}
