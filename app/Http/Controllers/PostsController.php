<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Room;
use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function show (Room $room, Post $post)
   {
       return view('posts.show', compact('room', 'post'));

   }

    public function store ($room_id) 
    {
        $this->validate(request(), [
            'body' => 'required|min:1'
        ]);

        $post = Post::create([
            'body' => trim(request('body')),
            'user_id' => auth()->id(),
            'room_id' => $room_id
        ]);

        Room::find($room_id)->incrementPostsCount();
      
      
        $post->user->incrementPostsCount();


        return redirect("/room/$room_id");
    }

    public function update(Room $room, Post $post)
    {
        $this->validate(request(),
        ['body' => 'required|min:2']);

       

        $post->body = trim(request('body'));

        $post->save();


            return back();
    }

    public function destroy (Room $room, Post $post)
    {

        $room->decrementPostsCount();

        $post->deleteComments();

        $post->user->decrementPostsCount();

        Post::destroy($post->id);

        return redirect()->back();
    }
}
