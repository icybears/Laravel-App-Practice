<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
class ActivityController extends Controller
{
  

    public function recentPosts ()
    {
        $user = User::find(auth()->id());
        $rooms = $user->rooms()->pluck('room_id');
        $recent_posts = Post::orderBy('created_at','desc')->get();

        $recent_posts_followed = $recent_posts->filter(function ($post, $key) use ($rooms) {
            return ($rooms->contains($post->room->id));
        });
    
    
        return view('activity.recentPosts', compact('recent_posts_followed'));
    }

    public function topPosts ()
    {
        $user = User::find(auth()->id());
        $rooms = $user->rooms()->pluck('room_id');
        $posts_by_comments = Post::orderBy('comments_count', 'desc')->get();
             
        $top_posts_followed = $posts_by_comments->filter(function ($post, $key) use ($rooms) {
            return ($rooms->contains($post->room->id));
        });

        return view('activity.topPosts', compact('top_posts_followed'));
    }

    public function recentComments ()
    {
        $user = User::find(auth()->id());        
        $rooms = $user->rooms()->pluck('room_id');        
        $recent_comments = Comment::orderBy('created_at','desc')->get();

        $recent_comments_followed = $recent_comments->filter(function ($comment, $key) use ($rooms) {
            return ($rooms->contains($comment->post->room->id));
        });

        return view('activity.recentComments', compact('recent_comments_followed'));
        
    }


 
}
