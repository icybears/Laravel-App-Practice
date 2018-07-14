@extends('activity.index')

@section('current')

<div class="row ">
   <div class="col-8 offset-2">
          <ul class="list-group mt-4">
              <h3>Recently commented posts</h3>
              @foreach($recent_comments as $comment)
                <li class="list-group-item mt-3">
                  {{ $comment->post->room->getRoomNameOrId() }} 
                  <p>{{  $comment->post->getShortBody() }} <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span></p>
                  <a href='' class="btn btn-outline-primary float-right">Read</a>
                </li>
              @endforeach
            </ul>
   </div>
</div>
@endsection