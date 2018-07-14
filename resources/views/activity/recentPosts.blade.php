@extends('activity.index')

@section('current')
<div class="row">   
        <div class="col-6 offset-3">
            <ul class="list-group mt-3">
              <h3>Recent posts</h3>
              @foreach($recent_posts as $post)
                <li class="list-group-item">
                  <strong>{{ $post->room->getRoomNameOrId() }}</strong> &ndash; <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span>
                  <p> {{ str_limit($post->body, 120, ' (...)') }}</p>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
@endsection