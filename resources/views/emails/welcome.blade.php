@component('mail::message')
<h2 style="text-align:center;">Hi, {{$user->name}}!</h2>
<p>Welcome to PakistaniStageDramas! You're ready to use it; here's what you need to know:</p>
<p>PakistaniStageDramas is the website to watch comedy stage dramas from Pakistan. This websites provide all kind of stage dramas wheather old or new. You can search any drama by using search bar. Dramas can also be searched by artist name.</p>
<h3>Follow Us</h3>
<div class="icons" style="display: flex;justify-content: center;align-items: center;">
    <a href="https://twitter.com/DramasStage"><img style="width:80px; height:80px; margin-right:20px;" src="{{asset('images/twitter-icon.png')}}"></a>
    <a href="https://web.facebook.com/stageDramasPakistan"><img style="width:80px; height:80px; margin-left:20px;" src="{{asset('images/facebook-icon.png')}}"></a>
</div>
<b>Thanks,</b><br>
<b>{{ config('app.name') }}</b>

@endcomponent

