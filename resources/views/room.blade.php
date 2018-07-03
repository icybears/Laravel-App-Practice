@extends('layouts.main')


@section('content')
<div class="container-fluid">
    <h1 class="h2">Room</h1>
    <hr>
        <form method="POST" class="w-50 mx-auto" >
            {{ csrf_field() }}
            <div class="form-group my-auto">
              <textarea class="form-control" name="body" rows="2" placeholder="Express yourself"></textarea>
            </div>
            <div class="mt-1"><button type="submit" class="btn btn-success">Post</button></div>
        </form>
    <hr>
    <section>
        @foreach($room->posts as $post)
        <div class="row">
                <div class=" col-md-8 media border shadow-sm p-3 mb-5 bg-white rounded w-50 mx-auto">
                    <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
                    <div class="media-body">
                        <h5 class="mt-0">{{ $post->user->username }}</h5>
                        {{ $post->body }}
                        <br>
                        <span class="text-muted"> {{ $post->updated_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>
@endsection
