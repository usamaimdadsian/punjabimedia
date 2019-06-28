<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $videos = Video::all()->first();
        $actors = Actor::all()->first();

        return response()->view('sitemap.index', [
            'videos' => $videos,
            'actors' => $actors,
        ])->header('Content-Type', 'text/xml');
    }
}
