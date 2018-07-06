<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\Room;

class CommentsController extends Controller
{
    public function store (Room $room, Post $post)
    {
        $this->validate(request(),[
            'body' => 'required'
        ]);

        Comment::create([
            'body' => request('body'),
            'user_id' => auth()->id(),
            'post_id' => $post->id
        ]);

        return back();

    }

    public function destroy(Room $room, Comment $comment){

        Comment::destroy($comment->id);
        
        return redirect()->back();
    }
}
