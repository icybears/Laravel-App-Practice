<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        if(auth()->check()){

            $recent_posts = Post::orderBy('created_at','asc')->get();
            return view('home', compact('recent_posts'));

        }
        else {
            return view('layouts.landing');
        }
    }
}
