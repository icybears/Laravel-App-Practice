
<div id="deleteModal{{$post->id}}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
                    <h5 class="modal-title">Delete a post</h5>                    
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <p>Are you sure you want to delete this post ?</p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form id="formDeletePost{{$post->id}}"method="POST" action='{{ url("/room/$room->id/posts/$post->id") }}'>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="button" class="btn btn-danger" onclick="sendForm('formDeletePost{{$post->id}}',this)">Yes, delete</button>
                    </form>
            </div>
          </div>
        </div>
      </div>