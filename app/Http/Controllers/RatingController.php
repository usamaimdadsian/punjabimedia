<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // AJAX Section
    public function ratingUpdateAjax(Request $request)
    {
        $video_id=$request->input('video_id');
        $user_id=$request->input('user_id');
        $rating_data=$request->input('rating');
        $rating=Rating::where([['user_id','=',$user_id],['video_id','=',$video_id]])->first();
        if(!$rating)
        {
            $rating=new Rating;
            $rating->video_id=$video_id;
            $rating->user_id=$user_id;
            $rating->value=$rating_data;
            $rating->save();
        }
        else
        {
            $rating->value=$rating_data;
            $rating->update();
        }
         return response()->json($rating_data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
