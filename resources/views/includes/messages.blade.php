{{-- <div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> Your message has been sent successfully.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>

<div class="alert alert-danger alert-dismissible fade show">
    <strong>Error!</strong> A problem has been occurred while submitting your data.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div> --}}

<div class="alert-message-cont alert alert-primary hidden" style="position: fixed;width: 100%;text-align: center; background: #ff8d1b;z-index: 6;">
    {{-- {{ session()->get('message') }} --}}
    <div class="alert-message" style="display: inline-block;">

    </div>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@if (session('message'))
    <div class="alert-message-cont alert alert-primary" style="position: fixed;width: 100%;text-align: center; background: #ff8d1b;z-index: 6;">
        <div class="alert-message" style="display: inline-block;">
            {{ session()->get('message') }}
        </div>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif

@if ($errors->any())
    <div class="alert-message-cont alert alert-primary"
        style="position: fixed;width: 100%;text-align: center; background: #ff8d1b;z-index: 6;">
        <div class="alert-message" style="display: inline-block;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif