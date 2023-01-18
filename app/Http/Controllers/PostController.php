<?php

namespace App\Http\Controllers;


use App\Helpers\ImageHelper;
use App\Http\Requests\CreatePost;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(15);
        return view('home', ['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function edit(Post $post)
    {
        return view('post.update', ['post' => $post]);
    }

    public function store(CreatePost $request)
    {
        $imagePath = ImageHelper::uploadImage($request);
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
            'image' => $imagePath
        ]);
        return redirect()->route('show-post', $post);
    }

    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);

    }

    public function update(Post $post, CreatePost $request)
    {
//        dd($post->getRawOriginal('image'));
//        dd();
        if ($post->user_id == auth()->user()->id) {
            if ($request->image) {
                File::delete($post->getRawOriginal('image'));
                $post->image = ImageHelper::uploadImage($request);

            }
            $post->title = $request->title;
            $post->content = $request->input('content');
            $post->save();
            return redirect()->back();

        }
        abort(403);
    }

    public function destroy(Post $post)
    {
        if ($post->user_id == auth()->user()->id) {
            $post->delete();
            return redirect()->route('home');

        }
        abort(403);
    }

}
