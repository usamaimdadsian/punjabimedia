var YTdeferred=jQuery.Deferred();window.onYouTubeIframeAPIReady=function(){YTdeferred.resolve(window.YT)},function($){$.ajaxSetup({cache:!0}),$.getScript("https://www.youtube.com/iframe_api").done(function(script,textStatus){}),$.fn.simplePlayer=function(){var video=$(this),play=$("<div />",{id:"play"}).hide(),defaults={autoplay:1,autohide:1,border:0,wmode:"opaque",enablejsapi:1,modestbranding:1,version:3,hl:"en_US",rel:0,showinfo:0,hd:1,iv_load_policy:3};function onPlayerStateChange(event){event.data==YT.PlayerState.ENDED&&play.fadeIn(500)}function onPlayerReady(event){var replay;document.getElementById("play").addEventListener("click",function(){player.playVideo()})}return YTdeferred.done(function(YT){play.appendTo(video).fadeIn("slow")}),play.bind("click",function(){$("#player").length||($("<iframe />",{id:"player",src:"https://www.youtube.com/embed/"+video.data("video")+"?"+$.param(defaults)}).attr({width:video.width(),height:video.height(),seamless:"seamless"}).css("border","none").appendTo(video),video.children("img").hide(),$(this).css("background-image","url(play-button.png), url("+video.children().attr("src")+")").hide(),player=new YT.Player("player",{events:{onStateChange:onPlayerStateChange,onReady:onPlayerReady}})),$(this).hide()}),this}}(jQuery);