@extends('layouts.auth')

@section('title')
Create an account
@endsection

@section('content')
<form method="POST" action="/register" class="form-signin">    
  <h1 class="h3 mb-4 font-weight-normal">Create your account</h1>
  @include('partials.errors')
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputUsername" class="sr-only">Username</label>
    <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  </div>
 <div class="form-group">
    <label for="inputPasswordConf" class="sr-only">Password confirmation</label>
    <input type="password" name="password_confirmation" id="inputPasswordConf" class="form-control" placeholder="Password confirmation" required>
 </div>

  <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
  <a href="{{ route('login') }}">Already have an account ? Login</a>
  
<p class="mt-5 mb-3 text-muted">&copy; 2018</p>

</form>
    
@endsection