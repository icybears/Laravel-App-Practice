@extends('layouts.main')


@section('content')
<div class="container">
    <h1 class="h2">Room</h1>
    <hr>
        <form method="POST" class="row w-75 mx-auto" >
            {{ csrf_field() }}
            <div class="form-group col-sm-8 my-auto">
              <textarea class="form-control" name="body" rows="2" placeholder="Express yourself"></textarea>
            </div>
            <div class="col-sm my-auto"><button type="submit" class="btn btn-success">Post</button></div>
        </form>
</div>
@endsection
