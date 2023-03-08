@extends('layouts.login')
@section('content')
<div class="card-body">
      <p class="login-box-msg">Login Sekarang Untuk Memulai</p>
      <div class="card">
         <div class="card-body register-card-body">
      <form action="{{route ('postlogin')}}" method="post">
          {{ csrf_field() }}
        
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email"required autofocus>
          <span class="help-block with-errors"></span>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password"required autofocus>
          <span class="help-block with-errors"></span>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
@endsection