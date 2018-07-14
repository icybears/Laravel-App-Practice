@extends('activity.index')

@section('current')
<div class="row">
     <div class="col-6 offset-3">
            <ul class="list-group mt-4">
                    <h3>Most active posts</h3>
                    @foreach($top_posts as $post)
                      <li class="list-group-item">
                       {{ $post->room->getRoomNameOrId() }} &ndash; {{ $post->comments_count }} comment(s)
                       <p>{{ $post->getShortBody() }} <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span></p>
                      </li>
                    @endforeach
                  </ul>
     </div>
</div>


@endsection