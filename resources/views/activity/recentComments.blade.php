@extends('activity.index')

@section('current')

<div class="row ">
   <div class="col-6 offset-3">
          <ul class="list-group mt-4">
              <h3>Recently commented</h3>
              @foreach($recent_comments as $comment)
                <li class="list-group-item">
                  {{ $comment->post->room->getRoomNameOrId() }} 
                  <p>{{  $comment->post->getShortBody() }} <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span></p>
                  
                </li>
              @endforeach
            </ul>
   </div>
</div>
@endsection