@extends('layouts.main')
@section('content')

<div class="card mx-auto">
        <div class="card-body">
                <div class="row ">
                        <div class="col-12">
                            @include('partials.errors')
                            @include('partials.message')
                            <h3>Profile of {{ $user->username }}</h3>
                            <hr>
                        </div>
                        <div class="col-8 mt-5">
                            <p><strong>Username:</strong>&nbsp;{{ $user->username }}</p>
                            <p><strong>Bio:</strong>&nbsp;{!! is_null($user->bio) ? "<span class='text-muted'>No bio provided yet</span>": $user->bio !!}</p>
                            <p><strong>Interests:</strong>&nbsp;{!! is_null($user->interests) ? "<span class='text-muted'>No interests specified yet</span>": $user->interests !!}</p>
                            <p><strong>Location:</strong>&nbsp;{!! is_null($user->location) ? "<span class='text-muted'>No location specified yet</span>": $user->location !!} </p>
                            <p class="mt-4"><strong><a href='{{ url("/room/" . $user->room_id) }}'>Go to {{$user->username}}'s room</a></strong></p>
                        </div>
                        <div class="col-4">
                                <div id="imgPreviewWrapper"><img id="imgPreview" src='{{ $user->getImage() }}' alt="{{ $user->username . ' profile image' }}"> </div>
                               @if(Auth::id() == $user->id)
                               <a class="btn btn-primary mt-4" href='{{ url("/profile/". Auth::id() . "/edit") }}' role="button">Edit Profile</a>
                               @endif
                        </div>
                    </div>
        </div>
      </div>
    

@endsection
