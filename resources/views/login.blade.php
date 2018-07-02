@extends('layouts.auth') 

@section('title') Log-in to your account @endsection 

@section('content')
<form method="POST" action="/login" class="form-signin">

    <h1 class="h3 mb-3 font-weight-normal">Login to your account</h1>
    @include('partials.errors')
    @include('partials.message')
    {{ csrf_field() }}
    <label for="inputEmail" class="sr-only">Email Address</label>
    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <!-- <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>

</form>
@endsection
