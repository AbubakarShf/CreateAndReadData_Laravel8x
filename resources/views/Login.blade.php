@extends('Layout')



@section('content')
    <p id="text">Login Here</p>
<div class="container">
<form id="loginForm" name="register" method="POST">
    @csrf
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="emailField" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="passwordField" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection

