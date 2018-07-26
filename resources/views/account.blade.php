@extends('layouts.main')
@section('content')

@include('partials.message')
@include('partials.errors')
<div class="card mx-auto">
        <div class="card-body">
            <h3>Change Email</h3>
                <form class="row " method="POST" action='{{ url("/account/email") }}' >
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    
                        <div class="col-6 mt-5">
                          
                            <p class="form-group">
                                    <label>Current Email:</label>
                                    <input disabled type="text" class="form-control" value="{{ auth()->user()->email }}">
                            </p>
        
                            <p class="form-group">
                                <label>New Email:</label>
                                <input type="text" class="form-control" name="new-email" value="">
                            </p>

                            <p class="form-group">
                                <label>Current password</label>
                                <input type="password" class="form-control" name="password" value="">                                
                            </p>
                         
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-4">Change Email</button>
                        </div>
                    </form>
        </div>
      </div>
    
      <div class="card mx-auto mt-4">
        <div class="card-body">
            <h3>Change Password</h3>
                <form class="row " method="POST" action='{{ url("/account/password") }}'  >
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                     
                        <div class="col-6 mt-5">
                            <p class="form-group">
                                <label>New Password:</label>
                                <input type="password" class="form-control" name="newPassword" value="">
                            </p>
                            <p class="form-group">
                                <label>Confirm New password</label>
                                <input type="password" class="form-control" name="newPassword_confirmation" value="">
                                
                            </p>
                            <p class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" name="password" value="">
                                
                            </p>
                         
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-4">Change Password</button>
                        </div>
                    </form>
        </div>
      </div>

@endsection

               