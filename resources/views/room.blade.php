@extends('layouts.main')


@section('content')
<div class="container-fluid">
    <h1 class="h2">Room</h1>
    <hr>
        @include('posts.create')
    <hr>
    <section>
        @foreach($room->posts as $post)
            @include('posts.show')
        @endforeach
    </section>
</div>
@endsection
