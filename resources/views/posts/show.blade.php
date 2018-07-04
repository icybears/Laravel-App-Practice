<div class="row post">
@include('partials.modal-delete-post')
@include('partials.modal-update-post')
        <div class=" col-md-8 media border shadow-sm p-2 mb-3 bg-white rounded w-50 mx-auto">
            <img class="mr-3 rounded-circle" src="https://picsum.photos/64/64?image=45" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">{{ $post->user->username }}  
                     @if(auth()->user()->room_id == $room->id)
                            <button class="post-delete-btn btn btn-outline-danger float-right" data-toggle="modal" data-target="#deleteModal{{$post->id}}">
                                &times;
                            </button>
                            <button class="post-edit-btn btn btn-outline-primary float-right mr-1" data-toggle="modal" data-target="#updateModal{{$post->id}}">
                                    edit
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