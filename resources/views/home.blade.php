@extends('layouts.main')


@section('content')

<div class="container px-5 mt-4">
  <div class="row">
        <ul class="list-group col-5">
          <h3>Recent posts</h3>
          @foreach($recent_posts as $post)
            <li class="list-group-item">
              Room {{ $post->room->id }} : latest post {{ $post->created_at->diffForHumans() }}
            </li>
          @endforeach
        </ul>
        <ul class="list-group col-5 offset-2">
          <h3>Most active rooms</h3>
          @foreach($rooms_by_posts as $room)
            <li class="list-group-item">
              Room {{ $room->id }} : {{ $room->posts_count }}
            </li>
          @endforeach
        </ul>
  </div>
  <div class="row mt-3">
      <ul class="list-group col-5">
          <h3>Recent comments</h3>
          @foreach($recent_comments as $comment)
            <li class="list-group-item">
              Room {{ $comment->post->room->id }} : latest comment {{ $comment->created_at->diffForHumans() }}
            </li>
          @endforeach
        </ul>
        <ul class="list-group col-5 offset-2">
            <h3>Most active posts</h3>
            @foreach($posts_by_comments as $post)
              <li class="list-group-item">
                Room {{ $post->room->id }} : {{ $post->comments_count }} comments
              </li>
            @endforeach
          </ul>
  </div>
</div>
@endsection
