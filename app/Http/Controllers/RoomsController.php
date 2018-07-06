<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomsController extends Controller
{

    public function __construct ()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms = Room::all();

        return view('rooms.index', compact('rooms'));
    }

    public function show (Room $room) {

        return view('rooms.show', compact('room'));

    }

}
