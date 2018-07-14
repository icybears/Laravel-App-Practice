@extends('activity.index')

@section('current')
<div class="row">
     <div class="col-6 offset-3">
            <ul class="list-group mt-3">
                    <h3>Most active posts</h3>
                    @foreach($top_posts as $post)
                      <li class="list-group-item">
                       {{ $post->room->getRoomNameOrId() }} : {{ $post->comments_count }} comments
                      </li>
                    @endforeach
                  </ul>
     </div>
</div>


@endsection