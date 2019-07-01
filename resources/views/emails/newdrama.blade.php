@component('mail::message')

# New Stage Drama

 <h3>{{$video->name}}</h3>
 <p>{{$video->description}}</p>
 <p><b>Quality:</b> {{$video->quality}}</p>
 <p>The Artists of this drama are following:</p>
 @if ($actors)
<ul>
@foreach ($actors as $actor)
<li>{{$actor->name}}</li>
@endforeach
</ul>
 @endif
<div style="text-align:center;width: 100%; height: 50px;">
    <a style="background-color: Crimson;  border-radius: 5px;  color: white;  padding: .5em;  text-decoration: none; margin: 0 auto;" href="{{config('app.url').'/' . $video->video_page_link . '/' . $video->id}}">Watch here</a>
</div>
<h3>Follow Us</h3>
<div class="icons" style="display: flex;justify-content: center;align-items: center;">
    <a href="https://web.facebook.com/stageDramasPakistan"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" style="width:80px; height:80px; margin-right:20px; fill:#3f5c9a;"
        class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor"
            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
        </path>
    </svg></a>
    <a href="https://twitter.com/StageDramasPk"><svg style="width:80px; height:80px; margin-left:20px; fill: #65bbf2;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" class="svg-inline--fa fa-twitter-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg></a>
</div>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
