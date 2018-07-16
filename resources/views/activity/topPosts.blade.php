@extends('activity.index')

@section('current')
<div class="row">
     <div class="col-8 offset-2">
            <ul class="list-group mt-4">
                    <h3>Most active posts</h3>
                    @if(! count($top_posts))
                       @include('partials.activity-default')
                     @endif
                    @foreach($top_posts as $post)
                      <li class="list-group-item mt-3">
                      
                       <p>{{ $post->getShortBody() }}  &ndash; {{ $post->comments_count }} comment(s)</p>
                       <p> In <a href='{{ url("room/" . $post->room->id)}}'>{{ $post->room->getRoomNameOrId() }}</a> by <a href='{{ url("/profile/" . $post->user->id) }}'>{{ $post->user->username }}</a> <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span></p>
                       <div>
                          <a href='{{ url("room/" . $post->room->id . "/posts/$post->id") }}' class="btn btn-outline-primary float-right">Read</a>
                        </div>
                      </li>
                    @endforeach
                  </ul>
     </div>
</div>


@endsection