<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideosActors extends Model
{
    public function scopeupdateActors($query,$video_id,$actors)
    {
        $videos_actors = VideosActors::where('video_id', $video_id)->get();
        if (sizeof($actors) == $videos_actors->count()) {
            for ($i = 0; $i < sizeof($actors); $i++) {
                $vid_act = $videos_actors[$i];
                $vid_act->actor_id = $actors[$i];
                $vid_act->update();
            }
        } else {
            if ($videos_actors->count() > sizeof($actors)) {
                $diff = $videos_actors->count() - sizeof($actors);
                for ($i = 0; $i < $diff; $i++) {
                    $vid_act = $videos_actors[$i];
                    $vid_act->delete();
                }
            } else {
                $diff = sizeof($actors) - $videos_actors->count();
                for ($i = 0; $i < $videos_actors->count(); $i++) {
                    $vid_act = $videos_actors[$i];
                    $vid_act->actor_id = $actors[$i];
                    $vid_act->update();
                }
                for ($i = ($videos_actors->count() - 1); $i < $diff; $i++) {
                    $vid_act = new VideosActors;
                    $vid_act->actor_id = $actors[$i];
                    $vid_act->video_id = $video_id;
                    $vid_act->save();
                }
            }
        }
    }
}
