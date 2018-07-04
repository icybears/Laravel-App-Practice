<div class="media mt-3">
        <a class="pr-3" href="#">
          <img class="rounded-circle" src="https://picsum.photos/64/64?image=83" alt="Generic placeholder image">
        </a>
        <div class="media-body">
          <h5 class="mt-0">{{ $comment->user->username }}</h5>
          {{ $comment->body }}
        </div>
</div>