@extends('layouts.app')

@section('content')

<div class="container">
   <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')

    <div class="row">
        <h1>Edit Profile</h1>
    </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                        <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>

                            <input id="title" type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            name="title" value="{{ old('title') ?? $user->profile->title }}"
                            autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

            <div class="row">
                <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>

                    <input id="description" type="text"
                    class="form-control @error('description') is-invalid @enderror"
                    name="description" value="{{ old('description') ?? $user->profile->description }}"
                    autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <label for="url" class="col-md-4 col-form-label">{{ __('Url') }}</label>

                    <input id="url" type="text"
                    class="form-control @error('url') is-invalid @enderror"
                    name="url" value="{{ old('url') ?? $user->profile->url }}"
                    autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label d-flex">Profile Image</label>
                <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                            <strong>{{ $message }}</strong>
                    @enderror
            </div>

            <div class="section pt-3">
                <button class="btn btn-primary">Save Profile</button>
            </div>

            </div>
        </div>
   </form>
</div>
@endsection
