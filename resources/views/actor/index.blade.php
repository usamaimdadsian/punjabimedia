@extends('layouts.app')
@section('css')
    <style>
        ul
        {
            display: flex;
            flex-wrap: wrap;
            align-content: stretch;
        }
        .actors
        {
            width: 23%;
            margin: 6px;
            flex-wrap:row nowrap;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <ul>
            @foreach ($actors as $actor)
                <li class="actors"><a href="{{route('actor.edit',$actor->id)}}">{{$actor->name}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection