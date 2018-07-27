@extends('activity.index')

@section('current')

<div class="row ">
   <div class="col-8 offset-2">
          <ul class="list-group mt-4">
              <h3>Recently commented posts</h3>
              @if(! count($recent_comments))
                @include('partials.activity-default')
              @endif
              @foreach($recent_comments as $comment)
                <li class="list-group-item mt-3">
                  
                  <p>{{  $comment->post->getShortBody() }}</p>
                  <a href='{{ url("room/" . $comment->post->room->id . "/posts/" . $comment->post->id) }}' class="btn btn-outline-primary float-right">Read</a>
                  <p>In <a href='{{ url("room/" . $comment->post->room->id)}}'>{{ $comment->post->room->getRoomNameOrId() }}</a> by <a href='{{ url("/profile/" . $comment->post->user->id) }}'>{{ $comment->post->user->username }}</a>  <span class="text-muted">commented {{ $comment->created_at->diffForHumans() }}</span></p>
                </li>
              @endforeach
            </ul>
   </div>
</div>
@endsection