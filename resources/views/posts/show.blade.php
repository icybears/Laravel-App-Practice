<div class="row">
        <div class=" col-md-8 media border shadow-sm p-2 mb-3 bg-white rounded w-50 mx-auto">
            <img class="mr-3 rounded-circle" src="https://picsum.photos/64/64?image=45" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">{{ $post->user->username }}</h5>
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