@extends('activity.index')

@section('current')
<div class="row">   
        <div class="col-6 offset-3">
            <ul class="list-group mt-4">
              <h3>Recent posts</h3>
              @foreach($recent_posts as $post)
                <li class="list-group-item">
                {{ $post->room->getRoomNameOrId() }} &ndash; <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span>
                  <p> {{ $post->getShortBody() }}</p>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
@endsection