@extends('layouts.main')


@section('content')
<div class="container-fluid">
    <h1 class="h2">Room's post</h1>
    <section>
            @include('posts.post')
    </section>
</div>
@endsection