@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Actor</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST"  action="{{ route('actor.update',$actor->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{$actor->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <button type="submit" class="btn btn-primary" onclick="event.preventDefault();
                                                                document.getElementById('delete-form').submit();" style="background:red;">
                                    {{ __('Delete') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <form id="delete-form" action="{{ route('actor.destroy',$actor->id) }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection