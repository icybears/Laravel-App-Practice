@extends('layouts.auth') 

@section('title') Log-in to your account @endsection 

@section('content')
<form method="POST" action="/login" class="form-signin">

    <h1 class="h3 mb-4 font-weight-normal ">Login to your account</h1>
    <div class=" alert alert-info" role="alert">
            Test account: test@test.com/testpw12
    </div>
    @include('partials.errors')
    @include('partials.message')
    {{ csrf_field() }}
    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email Address</label>
        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    </div>
    <!-- <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a href="{{ route('register') }}">Don't have an account ? Register</a>

</form>
@endsection
