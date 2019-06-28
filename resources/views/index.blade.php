@extends('layouts.master')
@section('title')
    <title>Home | Pakistani Stage Dramas</title>
    <meta name="copyright" content="2018-{{ date('Y') }} pakistanistagedramas.ml All rights reserved">
@endsection
@section('content')
    @include('includes.banner')
    <script src="/js/jquery.slidey.js"></script>
    <script src="/js/jquery.dotdotdot.min.js"></script>
    <script type="text/javascript">
        $("#slidey").slidey({
                interval: 8000,
                listCount: 5,
                autoplay: false,
                showList: true
            });
            $(".slidey-list-description").dotdotdot();
    </script>
    @include('includes.banner_bottom')
    @include('includes.general_movies')
@endsection