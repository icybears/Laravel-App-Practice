<form id="createCommentForm" method="POST" action='{{ url("room/$room->id/posts/$post->id/comments") }}' class="row mt-2" >
        {{ csrf_field() }}
        <div class="form-group float-left w-75">
          <textarea class="form-control " name="body" rows="1" placeholder="Write your comment.."></textarea>
        </div>
        <button type="button" onclick="sendForm('createCommentForm',this)" class="btn btn-success float-left h-75  d-inline-block ml-1">Comment</button>
        
  </form>