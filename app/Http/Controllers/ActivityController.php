<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
class ActivityController extends Controller
{
  
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function recentPosts ()
    {
        $user = User::find(auth()->id());
        $rooms = $user->rooms()->pluck('room_id');
        $posts = Post::orderBy('created_at','desc')->get();

        $recent_posts = $posts->filter(function ($post, $key) use ($rooms) {
            return ($rooms->contains($post->room->id));
        });
    
    
        return view('activity.recentPosts', compact('recent_posts'));
    }

    public function topPosts ()
    {
        $user = User::find(auth()->id());
        $rooms = $user->rooms()->pluck('room_id');
        $posts = Post::orderBy('comments_count', 'desc')->get();
             
        $top_posts = $posts->filter(function ($post, $key) use ($rooms) {
            return ($rooms->contains($post->room->id));
        });

        return view('activity.topPosts', compact('top_posts'));
    }

    public function activePosts ()
    {
        $user = User::find(auth()->id());        
        $rooms = $user->rooms()->pluck('room_id');        
        $comments = Comment::orderBy('created_at','desc')->get();

        $recent_comments = $comments->filter(function ($comment, $key) use ($rooms) {
            return ($rooms->contains($comment->post->room->id));
        });

        return view('activity.activePosts', compact('recent_comments'));
        
    }


 
}
