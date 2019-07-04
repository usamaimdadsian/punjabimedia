<!-- general -->
<div class="general">
    <h4 class="latest-text w3_latest_text">Featured Stage Dramas</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Top viewed</a></li>
                <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Top Rating</a></li>
                <li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3_agile_featured_movies">
                        @foreach ($most_viewed_videos_g as $video)
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"
                                class="hvr-shutter-out-horizontal"><img src="{{$video->image_link}}" title="album-name" class="img-responsive"
                                    alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a
                                            href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}">{{$video->name}}</a>
                                    </h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
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
                            <div class="ribben">
                                <p>{{$video->quality}}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
                    @foreach ($top_rated_videos_g as $video)
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}" class="hvr-shutter-out-horizontal"><img src="{{$video->image_link}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}">{{$video->name}}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
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
                            <div class="ribben">
                                <p>{{$video->quality}}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>

                {{--  Latest Movies --}}
                <div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                    @foreach ($latest_videos_g as $video)
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}" class="hvr-shutter-out-horizontal"><img src="{{$video->image_link}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}">{{$video->name}}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
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
                            <div class="ribben">
                                <p>{{$video->quality}}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
                {{-- End Latest Movies --}}
            </div>
        </div>
    </div>
</div>
<!-- //general -->