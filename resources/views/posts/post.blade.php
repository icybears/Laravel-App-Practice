<div class="row post mt-3">
    @include('partials.modal-delete-post')
    @include('partials.modal-update-post')
            <div class=" col-md-8 media border shadow-sm p-2 mb-3 bg-white rounded w-50 mx-auto">
                <div class="minImgWrapper"><a href='{{ url("/profile/" . $post->user->id) }}'><img class="minImg mr-3 rounded-circle" src='{{ $post->user->getImage() }}' alt="{{ $post->user->username . ' profile image' }}"></a></div>
                <div class="ml-2 media-body">
                    <h5 class="mt-0"><a href='{{ url("/profile/" . $post->user->id) }}'>{{ $post->user->username }}</a>
                        @if(auth()->id() == $post->user->id)
                        <button class="post-delete-btn btn btn-sm btn-outline-danger float-right" data-toggle="modal" data-target="#deleteModal{{$post->id}}">
                            <i class="fas fa-times"></i>
                            </button>
                        <button class="post-edit-btn btn btn-sm btn-outline-primary float-right mr-1" data-toggle="modal" data-target="#updateModal{{$post->id}}">
                           Edit <i class="fas fa-pen"></i>
                        </button>
                        @elseif(auth()->user()->room_id == $room->id)
                        <button class="post-delete-btn btn btn-sm btn-outline-danger float-right" data-toggle="modal" data-target="#deleteModal{{$post->id}}">
                            <i class="fas fa-times"></i>
                        </button>
                        @endif
                       
                        </h5>
                     
                    {{ $post->body }}
                    <br>
                    <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span>
                  
                        
                     <a href='{{url("/room/$room->id/posts/$post->id")}}' class="text-muted">&bull; link <i class="fas fa-link fa-xs"></i></a> 
                    
                    @include('comments.create')
    
                    @foreach($post->comments as $comment)
                        @include('comments.show')
                    @endforeach
                </div>
            </div>
    </div>