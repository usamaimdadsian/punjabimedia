@extends('layouts.master')
@section('title')
    <title>{{$title}} | Pakistani Stage Dramas</title>
    <meta name="description" content="{{$video->description}} Watch online funny stage dramas for free, watch dramas in high quality without registration.  Just a better place for stage dramas for free, Dramas, Pakistani stage dramas, HD dramas, Top Pakistani Dramas, What are the best TV shows released in 2019? FULL list of dramas ..., dramas in pakistan, dramas of pakistan, dramas pakistan, dramas pakistani, pakistani dramas, dramas videos, dramas movies, drama queen, dramas, dramas hindi, dramas pakistani list, dramas in urdu, dramas urdu, dramas funny, dramas romance, dramas pak, dramas online, dramasonline, dramas movies 2018, dramas rating, dramas list, pakistani dramas online, dramas central, dramas watch online, dramas download, dramas all, dramas top, funny, funny videos, funny jokes, funny jokes in hindi, funny youtube videos, funny comedy video, funny video comedy, funny comedy, funny riddles, funny hindi movies, funny youtube, funny punjabi movies, comedy, comedy video, comedy hindi, comedy in hindi, comedy hindi video, comedy video hindi, comedy jokes, comedy film, comedy show, comedy hd video, comedy video hd, comedy comedy, comedy scene, comedy punjabi, comedy funny video, comedy, video funny, comedy youtube, comedy new, comedy best movies, comedy punjabi movies, comedy youtube video, comedy full movie, punjabi, punjabi videos, punjabi film, punjabi movies download, punjabi movie new, punjabi, new movies, punjabi comedy, punjabi comedy movies, dramas urdu 1, dramas 4 u, dramas actress, dramas status, dramas to watch, dramas online.com, dramas today, dramas name, dramas websites, dramas now, dramas to watch 2019, dramas 2017 pakistani, dramas 2018 pakistani, dramas pakistani 2018, dramas pakistani 2019">
@endsection
@section('css')
    <style>
        .star-rating-single:hover
        {
            color: gold;
        }
        #info
        {
            display: flex;
            margin-top: 20px;
        }
        #info div.img
        {
            margin-left: 1px;
            margin-right: 20px;
        }
        .col-sm-12 {
            width: auto;
        }
    </style>
@endsection
@section('content')
    <div class="single-page-agile-main">
        <div class="container">
            <!-- /w3l-medile-movies-grids -->
            <div class="agileits-single-top">
                <ol class="breadcrumb">
                    <li><a href="{{route('main.index')}}">Home</a></li>
                    <li class="active">{{$video->name}}</li>
                </ol>
            </div>
            <div class="single-page-agile-info">
                <!-- /movie-browse-agile -->
                <div class="show-top-grids-w3lagile">
                    <div class="">
                        <div class="song">
                            <br>
                            <div class="video-grid-single-page-agileits">
                                    <?php echo $video->video_link; ?>
                            </div>
                        </div>
                        <div id="info">
                                <div class="img">
                                    <img style="width: 157px;height: 200px;" src="{{asset($video->image_link)}}">
                                </div>
                                <div>
                                    <h1 class="name">{{$video->name}}</h1>
                                    <i class="fa fa-eye" style="margin-right:10px;"></i>{{number_format($video->views)}}
                                    <div class="mt-md addthis_native_toolbox"></div>
                                    <div class="desc">
                                        <div class="shortcontent">{{$video->description}}</div>
                                        <div class="row">
                                            <dl class="meta col-sm-12" style="width:75%;">
                                                <dt>Stars:</dt>
                                                <dd>
                                                    @foreach ($actors as $actor)
                                                        @if ($loop->last)
                                                            <a href="{{route('main.specified',['name'=>'actor','value'=>$actor->id])}}" title="{{$actor->name}}'s movies">{{$actor->name}}</a>
                                                        @else
                                                            <a href="{{route('main.specified',['name'=>'actor','value'=>$actor->id])}}" title="{{$actor->name}}'s movies">{{$actor->name}}</a>,
                                                        @endif
                                                    @endforeach
                                                </dd>
                                                <dt>Enter Rating:</dt>
                                                <dd>
                                                    <a><i id="star-rating-single-1" class="fa fa-star-o star-rating-single " aria-hidden="true"></i></a>
                                                    <a><i id="star-rating-single-2" class="fa fa-star-o star-rating-single" aria-hidden="true"></i></a>
                                                    <a><i id="star-rating-single-3" class="fa fa-star-o star-rating-single" aria-hidden="true"></i></a>
                                                    <a><i id="star-rating-single-4" class="fa fa-star-o star-rating-single" aria-hidden="true"></i></a>
                                                    <a><i id="star-rating-single-5" class="fa fa-star-o star-rating-single" aria-hidden="true"></i></a>
                                                    @guest
                                                        <script>
                                                            $('.star-rating-single').on('click',function(){
                                                                $('#login-button').click();
                                                            });
                                                        </script>
                                                        @else
                                                        <script>
                                                            function saveRatings(rating)
                                                            {
                                                                var data={
                                                                    "_token":{!! "'".csrf_token()."'" !!},
                                                                    "rating":rating,
                                                                    "video_id": {!! $video->id !!},
                                                                    "user_id": {!! Auth::user()->id !!}
                                                                };
                                                                var url={!! "'". route('video.rating.ajax')."'" !!};
                                                                $.ajax({
                                                                    url: url,
                                                                    type: 'POST',
                                                                    data: data,
                                                                    success: function(data){
                                                                        changeRatingStarColor(data)
                                                                    }
                                                                });
                                                            }
                                                            function changeRatingStarColor(value)
                                                            {
                                                                var j=1;
                                                                var id='';
                                                                for(i=0; i<5; i++)
                                                                {
                                                                    id='#star-rating-single-'+(j++);
                                                                    $(id).attr('class','fa fa-star-o star-rating-single');
                                                                }
                                                                j=1;
                                                                for(i=0; i<value; i++)
                                                                {
                                                                    id='#star-rating-single-'+(j++);
                                                                    $(id).attr('class','star-rating-single fa fa-star');
                                                                }
                                                            }
                                                            $(document).ready(function(){
                                                                $("#star-rating-single-1").on('click',function(){
                                                                    $('.rating-form .rating-value').attr('value',1);
                                                                    saveRatings(1);
                                                                });
                                                                $("#star-rating-single-2").on('click',function(){
                                                                    $('.rating-form .rating-value').attr('value',2);
                                                                    saveRatings(2);
                                                                });
                                                                $("#star-rating-single-3").on('click',function(){
                                                                    $('.rating-form .rating-value').attr('value',3);
                                                                    saveRatings(3);
                                                                });
                                                                $("#star-rating-single-4").on('click',function(){
                                                                    $('.rating-form .rating-value').attr('value',4);
                                                                    saveRatings(4);
                                                                });
                                                                $("#star-rating-single-5").on('click',function(){
                                                                    $('.rating-form .rating-value').attr('value',5);
                                                                    saveRatings(5);
                                                                });
                                                                changeRatingStarColor({!! $user_rating !!});
                                                            });
                                                        </script>
                                                    @endguest
                                                </dd>
                                            </dl>
                                            <dl class="meta col-sm-12">
                                                <dt>Rating:</dt>
                                                <dd class="rating"> <span>{{$rating}}</span> / <span>{{$times}}</span> times </dd>
                                                <dt>Release:</dt>
                                                <dd>{{$video->release_date}}</dd>
                                                <dt>Quality:</dt>
                                                <dd><span class="quality">{{$video->quality}}</span></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="clearfix"> </div>

                        <div class="all-comments">
                            <div class="all-comments-info">
                                <a href="#">Comments</a>
                                <div class="agile-info-wthree-box">
                                    @guest
                                        <p>Please Login to comment</p>
                                    @else
                                        <i class="fa fa-user" style="color: #ff8d1b;font-size: 20px;"></i> {{Auth::user()->name}}
                                    @endguest
                                    <div class="form-comment">
                                        <textarea placeholder="Message" class="comment-message" required=""></textarea>
                                        <input type="submit" class="comment-message-btn" value="SEND">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="media-grids comment-container">
                                @foreach($comments as $comment)
                                    <div class="media">
                                        <h5>{{$comment->user->name}}</h5>
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="{{asset('images/user.jpg')}}" title="One movies" alt=" " />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p>{{$comment->data}}</p>
                                            <span>Posted at :<a > {{date("F j, Y  g:i a",strtotime($comment->created_at->timezone("Asia/Karachi")))}} </a></span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @guest
                        <script>
                            $('.comment-message-btn').on('click',function(){
                                $('#login-button').click();
                            });
                        </script>
                        @else
                        <script>
                            var dateFormat = function () {
                                var token = /d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZ]|"[^"]*"|'[^']*'/g,
                                    timezone = /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,
                                    timezoneClip = /[^-+\dA-Z]/g,
                                    pad = function (val, len) {
                                        val = String(val);
                                        len = len || 2;
                                        while (val.length < len) val = "0" + val;
                                        return val;
                                    };

                                // Regexes and supporting functions are cached through closure
                                return function (date, mask, utc) {
                                    var dF = dateFormat;

                                    // You can't provide utc if you skip other args (use the "UTC:" mask prefix)
                                    if (arguments.length == 1 && Object.prototype.toString.call(date) == "[object String]" && !/\d/.test(date)) {
                                        mask = date;
                                        date = undefined;
                                    }

                                    // Passing date through Date applies Date.parse, if necessary
                                    date = date ? new Date(date) : new Date;
                                    if (isNaN(date)) throw SyntaxError("invalid date");

                                    mask = String(dF.masks[mask] || mask || dF.masks["default"]);

                                    // Allow setting the utc argument via the mask
                                    if (mask.slice(0, 4) == "UTC:") {
                                        mask = mask.slice(4);
                                        utc = true;
                                    }

                                    var _ = utc ? "getUTC" : "get",
                                        d = date[_ + "Date"](),
                                        D = date[_ + "Day"](),
                                        m = date[_ + "Month"](),
                                        y = date[_ + "FullYear"](),
                                        H = date[_ + "Hours"](),
                                        M = date[_ + "Minutes"](),
                                        s = date[_ + "Seconds"](),
                                        L = date[_ + "Milliseconds"](),
                                        o = utc ? 0 : date.getTimezoneOffset(),
                                        flags = {
                                            d:    d,
                                            dd:   pad(d),
                                            ddd:  dF.i18n.dayNames[D],
                                            dddd: dF.i18n.dayNames[D + 7],
                                            m:    m + 1,
                                            mm:   pad(m + 1),
                                            mmm:  dF.i18n.monthNames[m],
                                            mmmm: dF.i18n.monthNames[m + 12],
                                            yy:   String(y).slice(2),
                                            yyyy: y,
                                            h:    H % 12 || 12,
                                            hh:   pad(H % 12 || 12),
                                            H:    H,
                                            HH:   pad(H),
                                            M:    M,
                                            MM:   pad(M),
                                            s:    s,
                                            ss:   pad(s),
                                            l:    pad(L, 3),
                                            L:    pad(L > 99 ? Math.round(L / 10) : L),
                                            t:    H < 12 ? "a"  : "p",
                                            tt:   H < 12 ? "am" : "pm",
                                            T:    H < 12 ? "A"  : "P",
                                            TT:   H < 12 ? "AM" : "PM",
                                            Z:    utc ? "UTC" : (String(date).match(timezone) || [""]).pop().replace(timezoneClip, ""),
                                            o:    (o > 0 ? "-" : "+") + pad(Math.floor(Math.abs(o) / 60) * 100 + Math.abs(o) % 60, 4),
                                            S:    ["th", "st", "nd", "rd"][d % 10 > 3 ? 0 : (d % 100 - d % 10 != 10) * d % 10]
                                        };

                                    return mask.replace(token, function ($0) {
                                        return $0 in flags ? flags[$0] : $0.slice(1, $0.length - 1);
                                    });
                                };
                            }();

                            // Some common format strings
                            dateFormat.masks = {
                                "default":      "ddd mmm dd yyyy HH:MM:ss",
                                shortDate:      "m/d/yy",
                                mediumDate:     "mmm d, yyyy",
                                longDate:       "mmmm d, yyyy",
                                fullDate:       "dddd, mmmm d, yyyy",
                                shortTime:      "h:MM TT",
                                mediumTime:     "h:MM:ss TT",
                                longTime:       "h:MM:ss TT Z",
                                isoDate:        "yyyy-mm-dd",
                                isoTime:        "HH:MM:ss",
                                isoDateTime:    "yyyy-mm-dd'T'HH:MM:ss",
                                isoUtcDateTime: "UTC:yyyy-mm-dd'T'HH:MM:ss'Z'"
                            };

                            // Internationalization strings
                            dateFormat.i18n = {
                                dayNames: [
                                    "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat",
                                    "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
                                ],
                                monthNames: [
                                    "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec",
                                    "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
                                ]
                            };

                            $(document).ready(function(){

                                $('.comment-message-btn').on('click',function(){
                                    var data={
                                        "_token":{!! "'".csrf_token()."'" !!},
                                        "replied_to":0,
                                        "video_id": {!! $video->id !!},
                                        "user_id": {!! Auth::user()->id !!},
                                        "data":$('.comment-message').val()
                                    };
                                    var url={!! "'". route('video.comment.ajax')."'" !!};
                                    $.ajax({
                                        url: url,
                                        type: 'POST',
                                        data: data,
                                        success: function(data){
                                            $('.comment-message').val(' ');
                                            img_url=APP_URL+'images/user.jpg'
                                            html='<div class="media"><h5>'+data.user_name+'</h5><div class="media-left"><a href="#"><img src="'+img_url+'" title="One movies" alt=" " /></a></div><div class="media-body"><p>'+data.data+'</p><span>Posted at :<a>'+dateFormat(new Date(),'mmmm dd, yyyy h:MM:ss TT')+'</a></span></div></div>';
                                            $('.comment-container').prepend(html);
                                        }
                                    });
                                });
                                // function listenEcho()
                                // {
                                    // Echo.channel('video.'+).listen('NewComment',function(comment){
                                //     //    alert(comment);
                                //     console.log('pusher window');
                                //     });
                                // }
                                // listenEcho();
                            });
                        </script>
                    @endguest
                    <div class="clearfix"> </div>
                </div>
                <!-- //movie-browse-agile -->

            </div>
            <!-- //w3l-latest-movies-grids -->
        </div>
    </div>
    <script>
        window.onresize = function () {
            if (window.innerWidth <= 340) {
                document.querySelector('iframe').setAttribute("width",320);
                document.querySelector('iframe').setAttribute("height",220);
            } else if (window.innerWidth <= 360) {
                document.querySelector('iframe').setAttribute("width",340);
                document.querySelector('iframe').setAttribute("height",220);
            } else if (window.innerWidth <= 1024) {
                document.querySelector('iframe').setAttribute("width",950);
                document.querySelector('iframe').setAttribute("height",650);
            } else if (window.innerWidth <= 1366) {
                document.querySelector('iframe').setAttribute("width",1180);
                document.querySelector('iframe').setAttribute("height",650);
            }
        };


        if (window.innerWidth <= 340) {
            document.querySelector('iframe').setAttribute("width",320);
            document.querySelector('iframe').setAttribute("height",220);
        } else if (window.innerWidth <= 360) {
            document.querySelector('iframe').setAttribute("width",340);
            document.querySelector('iframe').setAttribute("height",220);
        } else if (window.innerWidth <= 1024) {
            document.querySelector('iframe').setAttribute("width",950);
            document.querySelector('iframe').setAttribute("height",650);
        } else if (window.innerWidth <= 1366) {
            document.querySelector('iframe').setAttribute("width",1180);
            document.querySelector('iframe').setAttribute("height",650);
        }
    </script>
@endsection
