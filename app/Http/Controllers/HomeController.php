<?php

namespace App\Http\Controllers;

use App\Post;
use App\Room;
use App\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        if(auth()->check()){

            $recent_posts = Post::orderBy('created_at','desc')->get();
            $recent_comments = Comment::orderBy('created_at','desc')->get();
            $rooms_by_posts = Room::orderBy('posts_count','desc')->get();
            $posts_by_comments = Post::orderBy('comments_count', 'desc')->get();

            return view('home', compact('recent_posts','rooms_by_posts','recent_comments','posts_by_comments'));

        }
        else {
            return view('layouts.landing');
        }
    }
}
