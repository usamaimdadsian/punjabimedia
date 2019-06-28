@extends('layouts.app')
<style>
    .container
    {
        display: flex;
    }
    .video-card
    {
        display: flex;
        width: 182px;
        height: 290px;
        margin: 15px;
    }
    .video-card img
    {
        width: 182px;
        height: 268px;
    }
    .video-card h6
    {
        display: inline;
    }
    .video-card p
    {
        display: inline;
    }
</style>
@section('content')
<div class="container">
    @foreach ($videos as $video)
        <div class="video-card">
            <a href="{{route('video.edit',$video->id)}}">
                <img src="{{$video->image_link}}"/>
                <h6>{{$video->name}}</h6>
                <p>2016</p>
            </a>
        </div>
    @endforeach
@endsection