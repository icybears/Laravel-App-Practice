<div class="row post">
@include('partials.modal-delete-post')
@include('partials.modal-update-post')
        <div class=" col-md-8 media border shadow-sm p-2 mb-3 bg-white rounded w-50 mx-auto">
            <div class="minImgWrapper"><a href='{{ url("/profile/" . $post->user->id) }}'><img class="minImg mr-3 rounded-circle" src='{{ $post->user->getImage() }}' alt="{{ $post->user->username . ' profile image' }}"></a></div>
            <div class="ml-1 media-body">
                <h5 class="mt-0"><a href='{{ url("/profile/" . $post->user->id) }}'>{{ $post->user->username }}</a>
                  
                    @if(auth()->id() == $post->user->id)
                    <button class="post-delete-btn btn btn-sm btn-outline-danger float-right" data-toggle="modal" data-target="#deleteModal{{$post->id}}">
                            &times;
                        </button>
                    <button class="post-edit-btn btn btn-sm btn-outline-primary float-right mr-1" data-toggle="modal" data-target="#updateModal{{$post->id}}">
                            edit
                    </button>
                    @elseif(auth()->user()->room_id == $room->id)
                    <button class="post-delete-btn btn btn-sm btn-outline-danger float-right" data-toggle="modal" data-target="#deleteModal{{$post->id}}">
                        &times;
                    </button>
                    @endif
                   
                    </h5>
                {{ $post->body }}
                <br>
                <span class="text-muted"> {{ $post->updated_at->diffForHumans() }}</span>
                
                @include('comments.create')

                @foreach($post->comments as $comment)
                    @include('comments.show')
                @endforeach
            </div>
        </div>
</div>