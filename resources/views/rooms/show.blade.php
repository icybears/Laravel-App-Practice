@extends('layouts.main')


@section('content')
<div class="container-fluid">
    <h1 class="h2">Room <a href='{{ url("/room/$room->id/edit") }}' class="btn btn-sm btn-primary">Config</a> </h1>
    <div class="row">
        <div class="col-6">
            <p>Room name: {{ $room->name ? $room->name : 'No name specified yet' }}</p>
            <p>Description: {{ $room->description ? $room->description : 'No description given yet' }}</p>    
        </div>
    </div>
    
    <hr>
        @include('posts.create')
    <hr>
    <section>
        @if(count($room->posts))
            @foreach($room->posts()->orderBy('updated_at','desc')->get() as $post)
                @include('posts.post')
            @endforeach
        @else
            <h1 class="text-muted text-center font-weight-light"> Nothing posted here yet !</h1>
        @endif
    </section>
</div>
@endsection
