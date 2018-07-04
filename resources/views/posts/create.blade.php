<form method="POST" action='{{ url("room/$room->id/posts") }}' class="w-50 mx-auto" >
        {{ csrf_field() }}
        <div class="form-group my-auto">
          <textarea class="form-control" name="body" rows="2" placeholder="Express yourself"></textarea>
        </div>
        <div class="mt-1"><button type="submit" class="btn btn-success">Post</button></div>
  </form>