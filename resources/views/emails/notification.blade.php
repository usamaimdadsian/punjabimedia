@component('mail::message')
# {{$title}}
<p>{{$email}}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
