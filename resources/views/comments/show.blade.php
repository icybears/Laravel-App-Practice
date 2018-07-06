<div class="media comment mt-3">
    <a class="mr-1 minImgWrapper" href='{{ url("/profile/" . $comment->user->id) }}'>
         <img class="minImg rounded-circle" src='{{ $comment->user->getImage() }}' alt="{{ $comment->user->username . ' profile image' }}">
        </a>
        
    <div class="media-body">
        <h5 class="mt-0"><a href='{{ url("profile/" . $comment->user->id) }}'>{{ $comment->user->username }}</a>
          @if(auth()->user()->room_id == $room->id)
          <button class="comment-delete-btn btn btn-sm btn-outline-danger float-right" data-toggle="modal" data-target="#deleteModal{{$post->id}}">
                &times;
           </button> 
        @endif
        @if(auth()->id() == $comment->user->id)
            <button class="comment-delete-btn btn btn-sm btn-outline-danger float-right" data-toggle="modal" data-target="#deleteModal{{$post->id}}">
              &times;
            </button>
            <button class="comment-edit-btn btn btn-sm btn-outline-primary float-right mr-1" data-toggle="modal" data-target="#updateModal{{$post->id}}">
              edit
            </button> 
        @endif
        </h5>
        {{ $comment->body }}<span class="text-muted"> {{ $comment->updated_at->diffForHumans() }} </span>
         
       
    </div>
</div>
