<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="w3_agile_banner_bottom_grid">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach ($videos_latest as $video)
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
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
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
