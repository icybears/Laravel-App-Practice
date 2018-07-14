@extends('layouts.main') 
@section('content')
<div class="container">
    <div class="row">
        <h2 class="mb-5">Explore rooms</h2>
       
    </div>
    <div class="row">
        <div id="rooms" class="card-columns">
            @foreach($rooms as $room)

            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">{{$room->getRoomNameOrId()}} </h5>
                    <p class="card-text">{{ $room->description ?? "This room doesn't have a description"}}</p>
                    <p class="card-text"><small class="text-muted">{{ count($room->posts) ." ". str_plural("post", count($room->posts)) }}</small></p>
                    <p class="card-text"><small class="text-muted">{{ count($room->users) ." ". str_plural("subscriber", count($room->users)) }}</small></p>
                    <a class="btn btn-outline-success" href='{{ url("/room/$room->id") }}'>
                       Enter 
                    </a>
                </div>
            </div>
    
            @endforeach
        </div>
    </div>
</div>
@endsection
