@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <form id="update-post-form" method="post" action="{{route('update-post',$post)}}"
              enctype='multipart/form-data'>

            <div class="modal-body">
                <div class="form-group">
                    <label class="h5 m-2" for="post-title">Title</label>
                    <input type="text" class="form-control @error('title') {{'is-invalid'}} @enderror" name="title"
                           id="post-title" value="{{$post->title}}" placeholder="Title">
                    @error('title')<span class="invalid-feedback">{{$message}}</span>@enderror
                </div>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="h5 m-2" for="post-content">Content</label>
                    <textarea class="form-control @error('content') {{'is-invalid'}} @enderror" id="post-content"
                              name="content" rows="4">{{$post->content}}</textarea>
                    @error('content')<span class="invalid-feedback">{{$message}}</span>@enderror

                </div>
                <div class="mb-3">
                    <div class="text-center">
                        <img class="img-thumbnail m-auto" src="{{$post->image}}" alt="{{$post->title}}">
                    </div>

                    <label class="h5 m-2" for="post-image">Image</label>
                    <input class="form-control @error('image') {{'is-invalid'}} @enderror" type="file"
                           id="post-image"
                           name="image">
                    @error('image')<span class="invalid-feedback">{{$message}}</span>@enderror

                </div>

            </div>
            <div class="modal-footer">
                <a href="{{back()}}" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                <button class=" btn btn-primary " type="submit">Post</button>
            </div>
        </form>
    </div>
@endsection
