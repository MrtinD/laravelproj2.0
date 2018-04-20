@extends('layouts\navapp') 
@section('content')
<form class="form-signin" action="/register/account" method="POST">
    @csrf
    <div class="text-center mb-4">
        <img class="mb-4" src="https://www.shareicon.net/download/2015/10/07/114032_m-maaii.ico" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
    </div>

    @include('inc.error')

    <div class="form-label-group">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
        <label for="username">Username</label>
    </div>

    <div class="form-label-group">
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
    </div>
    <div class="form-label-group">
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
        <label for="password_confirmation">Confirm your password</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>

</form>

@endsection