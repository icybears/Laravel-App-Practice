@extends('layouts.main')


@section('content')
<div class="container-fluid">
    <h1 class="h2">Room</h1>
    <hr>
        @include('posts.create')
    <hr>
    <section>
        @if(count($room->posts))
            @foreach($room->posts()->orderBy('updated_at','desc')->get() as $post)
                @include('posts.show')
            @endforeach
        @else
            <h1 class="text-muted text-center font-weight-light"> Nothing posted here yet !</h1>
        @endif
    </section>
</div>
@endsection
