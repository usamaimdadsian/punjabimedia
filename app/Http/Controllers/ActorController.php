<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ActorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['getActors']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->Authority == 'common') {
            return redirect()->route('main.index')->with('message', 'Successful!');
        }
        $actors=Actor::all();
        return view('actor.index',compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->Authority == 'common') {
            return redirect()->route('main.index')->with('message', 'Successful!');
        }
        return view('actor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->Authority == 'common') {
            return redirect()->route('main.index')->with('message', 'Successful!');
        }
        $this->validate($request, [
            'name' => 'required|max:50'
        ]);
        $actor=new Actor;
        $actor->name=$request->input('name');
        $actor->save();
        return redirect()->route('actor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        if (Auth::user()->Authority == 'common') {
            return redirect()->route('main.index')->with('message', 'Successful!');
        }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        if (Auth::user()->Authority == 'common') {
            return redirect()->route('main.index')->with('message', 'Successful!');
        }
        return view('actor.edit',compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        if (Auth::user()->Authority == 'common') {
            return redirect()->route('main.index')->with('message', 'Successful!');
        }
        $actor->name=$request->input('name');
        $actor->update();
        return redirect()->route('actor.index')->with('message','Actor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        if (Auth::user()->Authority == 'common') {
            return redirect()->route('main.index')->with('message', 'Successful!');
        }
        DB::delete('DELETE FROM  videos_actors where actor_id = ?', [$actor->id]);
        DB::delete('DELETE FROM actors where id = ?', [$actor->id]);
        return redirect()->route('actor.index')->with('message', 'Successful!');
    }

    // API's
    // get all actors
    public function getActors()
    {
        $actors = Actor::all()->pluck('name')->toArray();
        return response()->json($actors,200);
    }
}
