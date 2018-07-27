<?php

namespace App\Http\Controllers;

use App\Post;
use App\Room;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index () {
        if(auth()->check()){           
     
            return redirect()->action('RoomsController@index');
        }
        else {
            return view('layouts.landing');
        }
    }
}
