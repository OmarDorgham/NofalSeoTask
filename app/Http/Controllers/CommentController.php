<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        Comment::create([
            'comment' => $request->comment,
            'post_id' => $post->id,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back();
    }
}
