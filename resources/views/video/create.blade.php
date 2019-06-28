@extends('layouts.app')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <style>
        .checkbox
        {
            /* margin-right: 20px; */
            width: 32%;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ADD VIDEO</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" enctype="multipart/form-data" action="{{ route('video.store') }}">
                            @csrf
                            {{-- Name --}}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Video Link --}}
                            <div class="form-group row">
                                <label for="video_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Video Link') }}</label>

                                <div class="col-md-6">
                                    <input id="video_link" type="text"
                                        class="form-control @error('video_link') is-invalid @enderror" name="video_link"
                                        value="{{ old('video_link') }}" required autocomplete="video_link" autofocus>

                                    @error('video_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="form-group row">
                                <label for="description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                        class="form-control @error('description') is-invalid @enderror" name="description"
                                        value="{{ old('description') }}" required autocomplete="description" autofocus>

                                    @error('video_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Quality --}}
                            <div class="form-group row">
                                <label for="quality"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Quality') }}</label>

                                <div class="col-md-6">
                                    <input id="quality" type="text"
                                        class="form-control @error('quality') is-invalid @enderror" name="quality"
                                        value="{{ old('quality') }}" required autocomplete="quality" autofocus>

                                    @error('quality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Release Date --}}
                            <div class="form-group row">
                                <label for="release_date"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Release Date') }}</label>

                                <div class="col-md-6">
                                    <input id="release_date" type="date"
                                        class="form-control @error('release_date') is-invalid @enderror" name="release_date"
                                        value="{{ old('release_date') }}" required autocomplete="release_date" autofocus>

                                    @error('release_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Image Portrait --}}
                            <div class="form-group row">
                                <label for="image_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Image Portrait') }}</label>

                                <div class="col-md-6">
                                    <input id="image_link" type="file" accept="image/*"
                                        class="form-control-file @error('image_link') is-invalid @enderror"
                                        name="image_link" value="{{ old('image_link') }}" required autocomplete="image_link"
                                        autofocus>

                                    @error('image_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Video Cover --}}
                            <div class="form-group row">
                                <label for="video_cover"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Video Cover') }}</label>

                                <div class="col-md-6">
                                    <input id="video_cover" type="file" accept="image/*"
                                        class="form-control-file @error('video_cover') is-invalid @enderror"
                                        name="video_cover" value="{{ old('video_cover') }}" required
                                        autocomplete="video_cover" autofocus>

                                    @error('video_cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Actors --}}
                            <div class="form-group row">
                                <button type="button" style="margin-left: auto;margin-right: auto;background: gray;" class="btn btn-primary col-md-6" data-toggle="modal" data-target="#myModal">
                                    Select Actors
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Select Actors</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                @foreach ($actors as $actor)
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="{{$actor->id}}" name="actors[]">{{$actor->name}}
                                                    </label>
                                                @endforeach
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Button --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Upload') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
