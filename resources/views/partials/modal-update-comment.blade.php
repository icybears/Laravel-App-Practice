
<div id="updateCommentModal{{$comment->id}}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
                    <h5 class="modal-title">Edit a comment</h5>                    
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @include('partials.errors')
            <form method="POST" action='{{ url("/room/$room->id/posts/$post->id/comments/$comment->id") }}'>
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="modal-body">
                    <div class="form-group">
                      <textarea class="form-control" name="body" rows="2">{{ $comment->body }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit comment</button>
                </div>
            </form>
          </div>
        </div>
      </div>