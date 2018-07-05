<div class="media mt-3">
        <a class="pr-3" href="#">
          <img class="rounded-circle" src="https://picsum.photos/64/64?image=83" alt="Generic placeholder image">
        </a>
        <div class="media-body">
          <h5 class="mt-0"><a href='{{ url("profile/" . $comment->user->id) }}'>{{ $comment->user->username }}</a></h5>
          {{ $comment->body }}<span class="text-muted"> {{ $comment->updated_at->diffForHumans() }} </span>
        </div>
</div>