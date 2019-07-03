<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Video;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }
    public function navigation()
    {
        return response()->view('sitemap.navigation')->header('Content-Type', 'text/xml');
    }
    public function videos()
    {
        $videos=Video::all();
        return response()->view('sitemap.videos', compact('videos'))->header('Content-Type', 'text/xml');
    }
    public function actors()
    {
        $actors=Actor::all();
        return response()->view('sitemap.actors', compact('actors'))->header('Content-Type', 'text/xml');
    }
    public function years()
    {
        $years = array();
        $dates=Video::pluck('release_date')->toArray();
        if ($dates) {
            foreach ($dates as $date) {
                $years[] = date('Y', strtotime($date));
            }
        }
        return response()->view('sitemap.years',compact('years'))->header('Content-Type', 'text/xml');
    }
}
