@extends('layouts.main') 
@section('content')
<div class="container">
    <div class="row">
        <h2 class="mb-5">Explore rooms</h2>
     
    </div>
<div class="row ">
        <form method="GET" action='{{ url("/rooms/search") }}' class="mx-auto">
            @include('partials.errors')
            <div class="input-group mb-3 ">
                <input type="text" name="query" class="form-control " placeholder="Name or description " aria-label="Name or description of a room " aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
              </div>
        </form>
</div>

    <div class="row mt-4">
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
    <div class="row">
        <div class="mx-auto">
            {{ $rooms->links() }}
         </div>
    </div>
</div>
@endsection
