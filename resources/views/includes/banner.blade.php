<div id="slidey" style="display:none;">
    <ul>
        @foreach ($videos_latest_banner as $video)
            <li><img src="{{$video->video_cover}}" alt=" ">
                <p class='title'>{{$video->name}}</p>
                <p class='description'> {{$video->description}}</p>
            </li>
        @endforeach
    </ul>
</div>
<script src="js/jquery.slidey.js"></script>
<script src="js/jquery.dotdotdot.min.js"></script>
<script type="text/javascript">
    $("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
</script>
<!-- //banner -->