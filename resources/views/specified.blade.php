@extends('layouts.master')
@section('title')
    <title>{{$search_name}} | Pakistani Stage Dramas</title>
@endsection
@section('content')
    <div class="general-agileits-w3l">
        <div class="w3l-medile-movies-grids">
            <!-- /movie-browse-agile -->
            <div class="movie-browse-agile">
                <!--/browse-agile-w3ls -->
                <div class="browse-agile-w3ls general-w3ls">
                    <div class="tittle-head">
                        <h4 class="latest-text">{{$search_name}} </h4>
                        <div class="container">
                            <div class="agileits-single-top">
                                <ol class="breadcrumb">
                                    <li><a href="{{route('main.index')}}">Home</a></li>
                                    <li class="active">Search</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="browse-inner">
                            @foreach ($videos as $video)
                                <div class="col-md-2 w3l-movie-gride-agile">
                                    <a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}" class="hvr-shutter-out-horizontal">
                                        <img style="width: 182px; height:259px;" src="{{asset($video->image_link)}}" title="{{$video->name}}" class="img-responsive" alt=" " />
                                        <div class="w3l-action-icon">
                                            <i class="fa fa-play-circle" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="w3l-movie-text">
                                            <h6><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}">{{$video->name}}</a></h6>
                                        </div>
                                        <div class="mid-2">

                                            <p>{{date('Y', strtotime($video->release_date))}}</p>
                                            <div class="block-stars">
                                                <ul class="w3l-ratings">
                                                    @for ($i = 0; $i < $video->rating; $i++)
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    @endfor
                                                    @if ($video->rating !== 5)
                                                        @for ($i = 0; $i < (5-$video->rating); $i++)
                                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                        @endfor
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                    <div class="ribben two">
                                        <p>{{$video->quality}}</p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>
                <!--//browse-agile-w3ls -->
                <div class="blog-pagenat-wthree">
                    {{-- <ul>
                        <li><a class="frist" href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a class="last" href="#">Next</a></li>
                    </ul> --}}
                    {{ $videos->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection