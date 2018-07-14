@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="mb-5">Explore rooms</h2>
       
    </div>
    <div class="card-deck">
        @foreach($rooms as $room)
        <div class="card text-center">
                <a href='{{ url("/room/$room->id") }}'>
                <div class="card-body">
                <h5 class="card-title">{{$room->user->username}}'s room</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection