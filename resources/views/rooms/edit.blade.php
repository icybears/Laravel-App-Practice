@extends('layouts.main')
@section('content')

<div class="card mx-auto">
        <div class="card-body">
                <form class="row " method="POST" action='' enctype="multipart/form-data" >
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                        <div class="col-12">
                            @include('partials.errors')
                            <h3>Room {{ $room->name ? $room->name : $room->id }}</h3>
                            <hr>
                        </div>
                        <div class="col-6 mt-3">
                            <p class="form-group">
                                <label>Room name:</label>
                                <input type="text" class="form-control" name="name" value="{{ $room->name ? $room->name : '' }}">
                            </p>
                            <p class="form-group">
                                <label>Room description:</label>
                                <textarea name="description" class="form-control" cols="30" rows="2">{{ $room->description ? $room->description : '' }}</textarea>
                            </p>
                            <p class="form-group">
                                <label>Category:</label>
                                <input type="text"  class="form-control" name="category" value="">
                            </p>
                           
                        </div>
                        <div class="col-2"></div>
                        <div class="col-4">
                               <!-- <div id="imgPreviewWrapper"><img id="imgPreview" class="mt-4" src="{{ ''  }}" alt="{{ ''}}"></div>
                               <div class="form-group">
                                 <label for="">Image</label>
                                 <input type="file" name="image" class="form-control-file" onchange="document.getElementById('imgPreview').src = window.URL.createObjectURL(this.files[0])" aria-describedby="fileHelpId">
                                 <small id="fileHelpId" class="form-text text-muted">Help text</small>
                               </div>  -->
                             
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary px-4">Save</button>
                        </div>
                    </form>
        </div>
      </div>
    

@endsection

               