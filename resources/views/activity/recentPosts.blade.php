@extends('activity.index')

@section('current')
<div class="row">   
        <div class="col-8 offset-2">
            <ul class="list-group mt-4">
              <h3>Recent posts</h3>
              @foreach($recent_posts as $post)
                <li class="list-group-item mt-3">
                    <p> {{ $post->getShortBody() }}</p>
                <p>In <a href=''>{{ $post->room->getRoomNameOrId() }}</a> by <a href=''>{{ $post->user->username }}</a> &ndash; <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span></p>
                  
                    <a href='' class="btn btn-outline-primary float-right">Read</a>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
@endsection