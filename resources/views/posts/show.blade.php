@extends('layouts.main')


@section('content')
<div class="container-fluid">
    <h1 class="h2 font-weight-light">In <a href='{{ url("/room/" . $post->room->id ) }}'>{{ $post->room->getRoomNameOrId()}}</a> </h1>
    <section>
            @include('posts.post')
    </section>
</div>
@endsection