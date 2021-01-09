<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Email;
use App\Video;
use App\Mail\NewDrama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\VideosActors;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin')->except([]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=Video::all();
        return view('video.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actors=Actor::all();
        return view('video.create',compact('actors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:300',
            'video_link' => 'required|max:500',
            'quality' => 'required|max:5'
        ]);
        $page_link=preg_replace('/\s+/', '_', $request->input('name'));
        $image_link = $this->imageAddress($request->file('image_link'), $request->hasFile('image_link'),0);
        if($request->hasFile('video_cover'))
        {
            $video_cover = $this->imageAddress($request->file('video_cover'),$request->hasFile('video_cover'), 1);
        }

        $video=new Video;
        $video->name=$request->input('name');
        $video->video_link=$request->input('video_link');
        $video->description=$request->input('description');
        $video->quality=$request->input('quality');
        $video->release_date=$request->input('release_date');
        $video->image_link=$image_link;
        if($request->hasFile('video_cover'))
        {
            $video->video_cover=$video_cover;
        }
        $video->video_page_link=$page_link;
        $video->save();
        if($request->input('actors'))
        {
            $actors=$request->input('actors');
            foreach ($actors as $actor) {
                DB::insert( 'insert into videos_actors (video_id, actor_id) values (?, ?)', [$video->id, $actor]);
            }
        }
        if($request->input('sendemail'))
        {
            $emails=Email::pluck('email')->toArray();
            foreach ($emails as $email) {
                Mail::to($email)->send(new NewDrama($video));
            }
        }
        return redirect()->back()->withErrors('Your Entry is success fully entered.');
    }

    public function imageAddress($image, $image_presence, $which_img)
    {
        if ($image_presence) {
            // get file name with the extension
            $file_name_ext = $image->getClientOriginalName();
            // get just file name
            $file_name = pathinfo($file_name_ext, PATHINFO_FILENAME);
            // get just extension
            $extension = $image->getClientOriginalExtension();
            // file name to store
            $pic_address = $file_name . '_' . time() . '.' . $extension;
            // Upload Image

            $path = $image->storeAs('public/Drama_pics', $pic_address);
            $pic_address = 'storage/Drama_pics/' . $pic_address;
        } else {
            $pic_address =($which_img == 0)? 'images/noimage_port.jpg': 'images/noimage_cover.jpg';
        }
        return $pic_address;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $actors = Actor::all();
        $selected_actors=DB::select('select * from videos_actors where video_id = ?', [$video->id]);
        // dd($selected_actors);
        return view('video.edit',compact('video','actors', 'selected_actors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $this->validate($request, [
            'name' => 'required|max:300',
            'video_link' => 'required|max:500',
            'quality' => 'required|max:5'
        ]);
        $page_link = preg_replace('/\s+/', '_', $request->input('name'));

        if($request->hasFile('image_link')){
            $image_link = $this->imageAddress($request->file('image_link'), $request->hasFile('image_link'), 0);
            $video->image_link = $image_link;
        }
        if($request->hasFile('video_cover'))
        {
            $video_cover = $this->imageAddress($request->file('video_cover'), $request->hasFile('video_cover'), 1);
            $video->video_cover = $video_cover;
        }

        $video->name = $request->input('name');
        $video->video_link = $request->input('video_link');
        $video->description = $request->input('description');
        $video->quality = $request->input('quality');
        $video->release_date = $request->input('release_date');
        $video->video_page_link = $page_link;
        $video->update();
        $actors = $request->input('actors');
        VideosActors::updateActors($video->id, $actors);
        return redirect()->back()->withErrors('Video is successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        DB::delete('DELETE FROM  videos_actors where video_id = ?', [$video->id]);
        DB::delete('DELETE FROM videos where id = ?', [$video->id]);
        return redirect()->route('video.index');
    }

    // API
    public function getTitles()
    {
        $titles = Video::all()->pluck('name')->toArray();
        return response()->json($titles,200);
    }
    public function getLinks()
    {
        $links = Video::all()->pluck('video_link')->toArray();
        return response()->json($links,200);
    }
    public function apiStore(Request $request)
    {
        
    }
}
