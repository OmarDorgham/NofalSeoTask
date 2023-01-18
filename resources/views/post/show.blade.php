@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <section class="my-5">
                <div class="container ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-10 col-xl-8">
                            {{--                            posts here                            --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-start align-items-center">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                             src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp"
                                             alt="avatar" width="60"
                                             height="60"/>
                                        <div class="d-block ">
                                            <h6 class="fw-bold d-inline-block text-primary mb-1">{{$post->user->name}} </h6>
                                            <div class="float-end ms-3 d-inline">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="{{asset('storage/icons8-gear.gif')}}"></button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item "
                                                               href="{{route('edit-post',$post)}}">Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item text-danger" data-bs-toggle="modal"
                                                               data-bs-target="#deletePostModal">Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <span>{{$post->crea}}</span>
                                            <p class="text-muted small mb-0 d-block">
                                                {{$post->created_at}}
                                            </p>
                                        </div>
                                    </div>
                                    <h2 class="m-2">{{$post->title}}</h2>
                                    <img
                                        src="{{$post->image}}"
                                        class="card-img m-2">
                                    <p class="mt-3 mb-4 pb-2">
                                        {{$post->content}}
                                    </p>
                                    <section>
                                        <div class=" text-dark">
                                            @foreach($post->comments as $comment)
                                                <div class=" p-5 pt-2">
                                                    <div class="d-flex flex-start">
                                                        <img class="rounded-circle shadow-1-strong me-3"
                                                             src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp"
                                                             alt="avatar" width="60"
                                                             height="60"/>
                                                        <div>
                                                            <h6 class="fw-bold mb-1">{{$comment->user->name}}</h6>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <p class="mb-0">
                                                                    {{$comment->created_at}}
                                                                </p>
                                                            </div>
                                                            <p class="mb-0">
                                                                {{$comment->comment}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-0 mb-5"/>

                                            @endforeach
                                        </div>

                                    </section>
                                </div>
                                <form action="{{route('store-comment',$post)}}" method="post">
                                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                        <div class="d-flex flex-start w-100">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp"
                                                 alt="avatar" width="40"
                                                 height="40"/>
                                            <div class="form-outline w-100">
                                                        <textarea class="form-control" id="textAreaExample" rows="4"
                                                                   name="comment" style="background: #fff;"></textarea>
                                                <label class="form-label" for="textAreaExample">Message</label>
                                            </div>
                                        </div>
                                        @csrf
                                        <div class="float-end mt-2 pt-1">
                                            <button type="submit" class="btn btn-primary btn-sm">Post comment
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('post.delete')
@endsection
