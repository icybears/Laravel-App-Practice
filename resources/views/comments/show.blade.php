<div class="media comment mt-3">
    @include('partials.modal-delete-comment')
    @include('partials.modal-update-comment')
    <a class="mr-1 minImgWrapper" href='{{ url("/profile/" . $comment->user->id) }}'>
         <img class="minImg rounded-circle" src='{{ $comment->user->getImage() }}' alt="{{ $comment->user->username . ' profile image' }}">
        </a>
        
    <div class="media-body">
        <h5 class="mt-0"><a href='{{ url("profile/" . $comment->user->id) }}'>{{ $comment->user->username }}</a>
  
        @if(auth()->id() == $comment->user->id)
            <button class="comment-delete-btn btn btn-sm btn-outline-danger float-right" data-toggle="modal" data-target="#deleteCommentModal{{$comment->id}}">
                <i class="fas fa-times"></i>
            </button>
            <button class="comment-edit-btn btn btn-sm btn-outline-primary float-right mr-1" data-toggle="modal" data-target="#updateCommentModal{{$comment->id}}">
              Edit <i class="fas fa-pen"></i>
            </button>
        @elseif(auth()->user()->room_id == $room->id)
        <button class="comment-delete-btn btn btn-sm btn-outline-danger float-right" data-toggle="modal" data-target="#deleteModal{{$post->id}}">
            <i class="fas fa-times"></i>
            </button> 
            @endif 
        </h5>
        {{ $comment->body }}<span class="text-muted"> {{ $comment->created_at->diffForHumans() }} </span>  
        @if( $comment->created_at != $comment->updated_at)
        <span class="text-muted font-weight-light font-italic">&nbsp;Edited {{ $comment->updated_at->diffForHumans() }}</span>
        @endif
         
       
    </div>
</div>
