<div class="media mt-3">
        <a class="mr-1 minImgWrapper" href='{{ url("/profile/" . $comment->user->id) }}'>
         <img class="minImg rounded-circle" src='{{ $comment->user->getImage() }}' alt="{{ $comment->user->username . ' profile image' }}">
        </a>
        <div class="media-body">
          <h5 class="mt-0"><a href='{{ url("profile/" . $comment->user->id) }}'>{{ $comment->user->username }}</a></h5>
          {{ $comment->body }}<span class="text-muted"> {{ $comment->updated_at->diffForHumans() }} </span>
        </div>
</div>