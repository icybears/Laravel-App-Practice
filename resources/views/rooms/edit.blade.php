@extends('layouts.main')
@section('content')

<div class="card mx-auto">
        <div class="card-body">
                <form id="editRoomForm" method="POST" action='' >
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                       <div class="row">
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
                               
                            </div>
                       </div>
              
                        <div>
                            <button type="button" onclick="sendForm('editRoomForm',this)" class="btn btn-primary px-4">Save</button>
                        </div>
                    </form>
        </div>
      </div>
    

@endsection

               