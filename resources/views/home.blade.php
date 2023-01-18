@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-start">
            @foreach($posts as $post)
                <div class="card col-md-4 mt-2">
                    <img class="card-img-top" src="{{$post->image}}" alt="{{$post->title}}" style="height: 300px">
                    <div class="card-body">
                        <h4 class="card-title">{{$post->user->name}}</h4>
                        <p class="card-text">{{$post->title}}</p>
                        <p class="text-muted">{{$post->created_at}} </p>
                        <a href="{{route('show-post',$post->id)}}" class="btn btn-primary">See Post</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

