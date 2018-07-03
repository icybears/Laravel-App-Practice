<form method="POST" action='{{ url("room/$room->id/posts/$post->id/comments") }}' class="row mt-2" >
        {{ csrf_field() }}
        <div class="form-group col-9 mb-0">
          <textarea class="form-control" name="body" rows="1" placeholder="Write your comment.."></textarea>
        </div>
        <div class="col-3"><button type="submit" class="btn btn-success">Comment</button></div>
  </form>