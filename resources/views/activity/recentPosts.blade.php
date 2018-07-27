@extends('activity.index')

@section('current')
<div class="row">   
        <div class="col-8 offset-2">
            <ul class="list-group mt-4">
              <h3>Recent posts</h3>
              @if(! count($recent_posts))
                @include('partials.activity-default')
              @endif
              @foreach($recent_posts as $post)
                <li class="list-group-item mt-3">
                    <p> {{ $post->getShortBody() }}</p>
                    <a href='{{ url("room/" . $post->room->id . "/posts/$post->id") }}' class="btn btn-outline-primary float-right">Read</a>
                    <p>In <a href='{{ url("room/" . $post->room->id)}}'>{{ $post->room->getRoomNameOrId() }}</a> by <a href='{{ url("/profile/" . $post->user->id) }}'>{{ $post->user->username }}</a> <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span></p>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
@endsection