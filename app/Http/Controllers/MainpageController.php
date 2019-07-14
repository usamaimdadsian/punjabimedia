<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Video;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class MainpageController extends Controller
{
    public function index()
    {
        $videos_latest_banner = Video::videosWithRatings(Video::latest()->take(6)->get());
        $videos_latest = Video:: videosWithRatings( Video::latest()->take(10)->get());
        //  Variables to use in general movie sections
        $latest_videos_g = Video::videosWithRatings( Video::latest()->take(12)->get());
        $most_viewed_videos_g=  Video::videosWithRatings(Video::orderBy('views','desc')->take(12)->get());
        $top_rated_videos_g= Video::videosTopRated(12);
        return view('index', compact( 'videos_latest_banner','videos_latest','latest_videos_g', 'most_viewed_videos_g', 'top_rated_videos_g'));
    }

    public function specified($name,$value)
    {
        if($name=='year')
        {
            $videos= Video::videosWithRatings(Video::where(DB::raw('YEAR(release_date)'),'=',$value)->get());
            $videos=Video::paginator($videos,24);
            $search_name='Year '. $value;
        }
        elseif($name == 'actor')
        {
            $s = implode("%", str_split($value));
            $videos=Actor::where('name','LIKE','%'.$value.'%')->orWhere('name','sounds like',"%$value%")->orWhere('name','LIKE',"%$s%")->first();
            // dd($videos);
            if($videos !== null)
            {
                $videos=$videos->videos()->paginate(24);
            }
            else {
                $videos=array();
                $videos = Video::paginator($videos, 24);
            }
            $search_name = $value;
        }
        elseif($name == 'search-box')
        {
            $videos = Video::videosWithRatings(Video::advancedSearch( Input::get('keyword')));
            $videos = Video::paginator($videos, 24);
            $search_name = 'Search: ' . Input::get('keyword');
        }
        elseif ($name == 'mostWatched') {
            $videos = Video::videosWithRatings(Video::orderBy('views', 'desc')->get());
            $videos = Video::paginator($videos, 24);
            $search_name = 'Most Watched';
        }
        elseif ($name == 'topRated') {
            $num=Video::all();
            $videos = Video::videosTopRated(sizeof($num));
            $videos = Video::paginator($videos, 24);
            $search_name = 'Top Rated';
        }
        else
        {
            $videos = array();
            $videos = Video::paginator($videos, 24);
            $search_name="Wrong Parameter";
        }
        return view('specified',compact('videos','search_name'));
    }

    public function single($name,Video $video)
    {
        $views=$video->views;
        $views++;
        $video->views=$views;
        $video->update();
        $actors=$video->actors;
        $title=$video->name;
        $user_rating=0;
        $rating=Rating::getRating($video)->rating;
        $times=Rating::getRating($video)->times;
        $comments=$video->comments()->with('user')->latest()->get();
        if(Auth::check())
        {
            $user_id=Auth::user()->id;
            $video_id=$video->id;
            $user_rating=Rating:: where([['user_id', '=', $user_id], ['video_id', '=', $video_id]])->first();
            if($user_rating)
            {
                $user_rating=$user_rating->value;
            }
        }
        return view('single',compact('video','actors','title','user_rating','rating','times','comments'));
    }

    public function atoz()
    {
        $videos_start_numb= Video::videosWithRatings(Video::where('name','regexp', '^[0-9]+')->get());
        $videos_start_a=Video:: videosWithRatings(Video::where('name','LIKE','a%')->get());
        $videos_start_b=Video:: videosWithRatings(Video::where('name','LIKE','b%')->get());
        $videos_start_c=Video:: videosWithRatings(Video::where('name','LIKE','c%')->get());
        $videos_start_d=Video:: videosWithRatings(Video::where('name','LIKE','d%')->get());
        $videos_start_e=Video:: videosWithRatings(Video::where('name','LIKE','e%')->get());
        $videos_start_f=Video:: videosWithRatings(Video::where('name','LIKE','f%')->get());
        $videos_start_g=Video:: videosWithRatings(Video::where('name','LIKE','g%')->get());
        $videos_start_h=Video:: videosWithRatings(Video::where('name','LIKE','h%')->get());
        $videos_start_i=Video:: videosWithRatings(Video::where('name','LIKE','i%')->get());
        $videos_start_j=Video:: videosWithRatings(Video::where('name','LIKE','j%')->get());
        $videos_start_k=Video:: videosWithRatings(Video::where('name','LIKE','k%')->get());
        $videos_start_l=Video:: videosWithRatings(Video::where('name','LIKE','l%')->get());
        $videos_start_m=Video:: videosWithRatings(Video::where('name','LIKE','m%')->get());
        $videos_start_n=Video:: videosWithRatings(Video::where('name','LIKE','n%')->get());
        $videos_start_o=Video:: videosWithRatings(Video::where('name','LIKE','o%')->get());
        $videos_start_p=Video:: videosWithRatings(Video::where('name','LIKE','p%')->get());
        $videos_start_q=Video:: videosWithRatings(Video::where('name','LIKE','q%')->get());
        $videos_start_r=Video:: videosWithRatings(Video::where('name','LIKE','r%')->get());
        $videos_start_s=Video:: videosWithRatings(Video::where('name','LIKE','s%')->get());
        $videos_start_t=Video:: videosWithRatings(Video::where('name','LIKE','t%')->get());
        $videos_start_u=Video:: videosWithRatings(Video::where('name','LIKE','u%')->get());
        $videos_start_v=Video:: videosWithRatings(Video::where('name','LIKE','v%')->get());
        $videos_start_w=Video:: videosWithRatings(Video::where('name','LIKE','w%')->get());
        $videos_start_x=Video:: videosWithRatings(Video::where('name','LIKE','x%')->get());
        $videos_start_y=Video:: videosWithRatings(Video::where('name','LIKE','y%')->get());
        $videos_start_z=Video:: videosWithRatings(Video::where('name','LIKE','z%')->get());
        return view('atoz', compact( 'videos_start_numb','videos_start_a', 'videos_start_b', 'videos_start_c', 'videos_start_d', 'videos_start_e', 'videos_start_f', 'videos_start_g', 'videos_start_h', 'videos_start_i', 'videos_start_j', 'videos_start_k', 'videos_start_l', 'videos_start_m', 'videos_start_n', 'videos_start_o', 'videos_start_p', 'videos_start_q', 'videos_start_r', 'videos_start_s', 'videos_start_t', 'videos_start_u', 'videos_start_v', 'videos_start_w', 'videos_start_x', 'videos_start_y', 'videos_start_z'));
    }

    // AJAX functions
    public function searchAjax(Request $request)
    {
        $keyword=$request->input('keyword');
        $videos = Video::videosWithRatings(Video::where('name', 'LIKE', '%' . $keyword. '%')->take(5)->get());
        return response()->json($videos);
    }
}
