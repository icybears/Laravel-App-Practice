<div class="row">
        <div class=" col-md-8 media border shadow-sm p-3 mb-5 bg-white rounded w-50 mx-auto">
            <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
            <div class="media-body">
                <h5 class="mt-0">{{ $post->user->username }}</h5>
                {{ $post->body }}
                <br>
                <span class="text-muted"> {{ $post->updated_at->diffForHumans() }}</span>
            </div>
        </div>
</div>