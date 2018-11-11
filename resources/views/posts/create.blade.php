<form id="createPostForm"method="POST" action='{{ url("room/$room->id/posts") }}' class="w-50 mx-auto" >
        {{ csrf_field() }}
        <div class="form-group my-auto">
          <textarea class="form-control" name="body" rows="3" placeholder="Express yourself"></textarea>
        </div>
        <div class="mt-1"><button type="button" class="btn btn-success" onclick="sendForm('createPostForm',this)">Post</button></div>
  </form>