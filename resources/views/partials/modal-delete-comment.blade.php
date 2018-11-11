
<div id="deleteCommentModal{{$comment->id}}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
                    <h5 class="modal-title">Delete a comment</h5>                    
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <p>Are you sure you want to delete this comment ?</p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form id="formDeleteComment{{$comment->id}}" method="POST" action='{{ url("/room/$room->id/posts/$post->id/comments/$comment->id") }}'>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="button" class="btn btn-danger" onclick="sendForm('formDeleteComment{{$comment->id}}',this)">Yes, delete</button>
                    </form>
            </div>
          </div>
        </div>
      </div>