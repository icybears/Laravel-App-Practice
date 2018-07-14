@extends('activity.index')

@section('current')

<div class="row mt-3">
        <ul class="list-group col-5">
            <h3>Recent comments</h3>
            @foreach($recent_comments as $comment)
              <li class="list-group-item">
                {{ $comment->post->room->getRoomNameOrId() }} : latest comment {{ $comment->created_at->diffForHumans() }}
              </li>
            @endforeach
          </ul>
</div>
@endsection