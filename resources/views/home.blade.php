@extends('layouts.main')


@section('content')

<div class="container px-5 mt-4">
  <div class="row">
        <ul class="list-group col-5">
          <h3>Recent posts</h3>
          @foreach($recent_posts as $post)
            <li class="list-group-item">
              <strong>{{ $post->room->getRoomNameOrId() }}</strong> &ndash; <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span>
              <p> {{ str_limit($post->body, 120, ' (...)') }}</p>
            </li>
          @endforeach
        </ul>
        <ul class="list-group col-5 offset-2">
          <h3>Most active rooms</h3>
          @foreach($rooms_by_posts as $room)
            <li class="list-group-item">
              {{ $room->getRoomNameOrId() }} : {{ $room->posts_count }}
            </li>
          @endforeach
        </ul>
  </div>
  <div class="row mt-3">
      <ul class="list-group col-5">
          <h3>Recent comments</h3>
          @foreach($recent_comments as $comment)
            <li class="list-group-item">
              {{ $comment->post->room->getRoomNameOrId() }} : latest comment {{ $comment->created_at->diffForHumans() }}
            </li>
          @endforeach
        </ul>
        <ul class="list-group col-5 offset-2">
            <h3>Most active posts</h3>
            @foreach($posts_by_comments as $post)
              <li class="list-group-item">
               {{ $post->room->getRoomNameOrId() }} : {{ $post->comments_count }} comments
              </li>
            @endforeach
          </ul>
  </div>
  <div class="row mt-3">
      <ul class="list-group col-5">
          <h3>Recent Posts from Rooms you subscribed to</h3>
          @foreach($recent_posts_subscribed as $post)
          <li class="list-group-item">
              <strong>{{ $post->room->getRoomNameOrId() }}</strong> &ndash; <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span>
              <p> {{ str_limit($post->body, 120, ' (...)') }}</p>
            </li>
          @endforeach
        </ul>
        <ul class="list-group col-5 offset-2">
        </ul>
  </div>
</div>
@endsection
