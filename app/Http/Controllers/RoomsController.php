<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomsController extends Controller
{
    public function show (Room $room) {

        return view('room', compact('room'));

    }
}
