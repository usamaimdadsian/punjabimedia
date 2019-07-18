<style>
    .hidden
    {
        display: none;
    }
    .suggestions
    {
        position: absolute;
        z-index: 5;
        background: #ebf6ff;
        border: 1px solid #ff8d1b;
        border-top: 0px;
    }
    .suggestions .item
    {
        display: flex;
        overflow: hidden;
        padding: 12px;
    }
    .suggestions .item .thumb
    {
        width:32px; height: 50px;
        float: left;
        vertical-align: middle;
        border: 0;
    }
    .suggestions .item .meta .span-info
    {
        margin-right: 10px;
    }
    .suggestions .item .info
    {
        margin-left: 40px;
        color: #777;
        font-size: .9rem;
    }
    .suggestions .item .info a.name
    {
        display: inline-block;
        margin-top: -3px;
        color: #666;
        font-weight: 400;
    }
    .suggestions .more
    {
        text-align: center;
        background: #ff8d1b;
        color: white;
        font-style: italic;
        font-size: 15px;
    }
    .suggestions .more a
    {
        color: white;
        cursor: pointer;
    }
    .search-box-closer
    {
        z-index: 3;
        background: transparent;
        top: 0px;
        left: 0px;
        right: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        position: fixed;
    }
    @media only screen and (min-width: 340px)
    {
        .suggestions
        {
            width: 305px;
        }
    }
    @media only screen and (min-width: 360px)
    {
        .suggestions
        {
            width: 330px;
        }
    }
    @media only screen and (min-width: 1024px)
    {
        .suggestions
        {
            width: 375px;
        }
    }
    @media only screen and (min-width: 1366px)
    {
        .suggestions
        {
            width: 455px;
        }
    }
</style>
<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            <a href="{{route('main.index')}}">
                <h1>Pakistani<span>Stage Dramas</span></h1>
            </a>
        </div>
        <div class="w3_search">
            <form id="index-search" method="GET" action="{{route('main.specified',['name' => 'search-box','value'=>'searching'])}}">
                <input id="index-search-input" type="text" placeholder="Search for Drama, star name.." name="keyword" autocomplete="off">
                <input class="search-form-submit" type="submit" value="Go">
                <div class="hidden suggestions" style=""></div>
            </form>
            <div class="search-box-closer hidden"></div>
        </div>
        <script>
            $(document).ready(function(){
                $('#index-search-input').on('keyup',function(){
                    var data={
                        "_token":{!! "'".csrf_token()."'" !!},
                        "keyword":$('#index-search-input').val()
                    };
                    var url={!! "'". route('drama.search.ajax')."'" !!};
                    var html='';
                    var url_img='';
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: data,
                        success: function(data){
                            if(data.length !== 0)
                            {
                                data.forEach(function(ele){
                                    year=new Date(ele.release_date);
                                    year=year.getFullYear();
                                    url_img=APP_URL+ele.image_link;
                                    url_drama=APP_URL+"drama/"+ele.video_page_link+"/"+ele.id;
                                    html+='<div class="item "><img class="thumb" src="'+url_img+'"><div class="info"><a class="name" href="'+url_drama+'">'+ele.name+'</a><div class="meta"><span class="span-info"><i class="quality">'+ele.quality+'</i></span><span class="span-info">Rating: <span class="imdb">'+ele.rating+'</span></span><span class="span-info"><span class="year">Release:</span>'+year+'</span></div></div></div>';
                                });
                                html+='<div class="more"><a class="view-all-btn">View all</a></div>';
                                $('.suggestions').html(html);
                                $('.search-box-closer').removeClass('hidden');
                                $('.suggestions').removeClass('hidden');
                                $(document).on('click','.view-all-btn',function(e){
                                    $('#index-search').submit();
                                });
                            }
                        }
                    });
                });
                $('.search-box-closer').on('click',function(){
                    $('.suggestions').addClass('hidden');
                    $('.search-box-closer').addClass('hidden');
                });
            });

        </script>
        <div class="w3l_sign_in_register">
            <ul>
            @guest
                    <li><a id="login-button" href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                @else
                    <li><i class="fa fa-user" style="color: #ff8d1b;font-size: 20px; padding-right: 5px;"></i>{{Auth::user()->name}}</li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            @endguest
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>