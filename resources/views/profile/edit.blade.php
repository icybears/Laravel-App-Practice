@extends('layouts.main')
@section('content')

<div class="card mx-auto">
        <div class="card-body">
                <form method="POST" action='{{ url("/profile/" . $user->id) }}' class="row ">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                        <div class="col-12">
                            @include('partials.errors')
                            <h3>Profile of {{ $user->username }}</h3>
                            <hr>
                        </div>
                        <div class="col-6 mt-5">
                            <p class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                            </p>
                            <p class="form-group">
                                <label>Bio:</label>
                                <textarea name="bio" name="bio" class="form-control" cols="30" rows="2">{{ $user->bio }}</textarea>
                            </p>
                            <p class="form-group">
                                <label>Interests:</label>
                                <input type="text"  class="form-control" name="interests" value="{{ $user->interests }}">
                            </p>
                            <p class="form-group">
                                <label>Location:</label>
                                <input type="text" class="form-control" name="location" value="{{ $user->location }}">
                            </p>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-4">
                               <div id="imgPreviewWrapper"><img id="imgPreview" class="mt-4" src="https://picsum.photos/g/200/300" alt=""></div>
                               <div class="form-group">
                                 <label for="">Image</label>
                                 <input type="file" class="form-control-file" onchange="document.getElementById('imgPreview').src = window.URL.createObjectURL(this.files[0])" aria-describedby="fileHelpId">
                                 <small id="fileHelpId" class="form-text text-muted">Help text</small>
                               </div> 
                             
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary px-4">Save</button>
                        </div>
                    </form>
        </div>
      </div>
    

@endsection

               