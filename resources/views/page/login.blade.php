@extends('layouts\navapp') 
@section('content')
<form class="form-signin" method="POST" action="/login/try">
  @csrf
  <div class="text-center mb-4">
    <img class="mb-4" src="https://www.shareicon.net/download/2015/10/07/114032_m-maaii.ico" alt="" width="72" height="72">
    {{-- <h1 class="h3 mb-3 font-weight-normal">Register</h1> --}}
  </div>

  <div class="form-label-group">
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <a href="\register" class="btn btn-lg btn-primary btn-block">Register</a>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
</form>


@endsection