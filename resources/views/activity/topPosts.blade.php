@extends('activity.index')

@section('current')
<div class="row">
     <div class="col-8 offset-2">
            <ul class="list-group mt-4">
                    <h3>Most active posts</h3>
                    @foreach($top_posts as $post)
                      <li class="list-group-item mt-3">
                       In {{ $post->room->getRoomNameOrId() }} by {{ $post->user->username }} &ndash; {{ $post->comments_count }} comment(s)
                       <p>{{ $post->getShortBody() }} <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span></p>
                       <div>
                          <a href='' class="btn btn-outline-primary float-right">Read</a>
                        </div>
                      </li>
                    @endforeach
                  </ul>
     </div>
</div>


@endsection