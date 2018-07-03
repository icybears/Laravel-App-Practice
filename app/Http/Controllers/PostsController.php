<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function store ($room_id) 
    {
        $this->validate(request(), [
            'body' => 'required|min:1'
        ]);

        Post::create([
            'body' => request('body'),
            'user_id' => auth()->id(),
            'room_id' => $room_id
        ]);

        return redirect("/room/$room_id");
    }
}
