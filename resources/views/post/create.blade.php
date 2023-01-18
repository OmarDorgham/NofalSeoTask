@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <form method="post" action="{{route('store-post')}}" enctype='multipart/form-data'>
            <div class="form-group">
                <label class="h5 m-2" for="post-title">Title</label>
                <input type="text" class="form-control @error('title') {{'is-invalid'}} @enderror" name="title"
                       id="post-title" value="{{ old('title') }}" placeholder="Title">
                @error('title')<span class="invalid-feedback">{{$message}}</span>@enderror
            </div>
            @csrf
            <div class="form-group">
                <label class="h5 m-2" for="post-content">Content</label>
                <textarea class="form-control @error('content') {{'is-invalid'}} @enderror" id="post-content"
                          name="content" rows="4">{{old('content')}}</textarea>
                @error('content')<span class="invalid-feedback">{{$message}}</span>@enderror

            </div>
            <div class="mb-3">
                <label class="h5 m-2" for="post-image">Image</label>
                <input class="form-control @error('image') {{'is-invalid'}} @enderror" type="file" id="post-image"
                       name="image">
                @error('image')<span class="invalid-feedback">{{$message}}</span>@enderror

            </div>
            <div class=" mt-2 text-center w-100">
                <button class="m-auto btn btn-primary ps-3 pe-3" type="submit">Post</button>
            </div>
        </form>
    </div>
@endsection
