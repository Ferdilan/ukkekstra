@extends('layouts.app')
@section('content')
    <div>
        <a href="/daftarpembina">
        <i class="fa fa-arrow-left"aria-hidden="true"> Kembali</i>
        </a>
    </div>
<div class="card">
<div class="card-header"><h2>Tambah Pembina<h2></div>
            <div class="card-body register-card-body">
                <form action="{{ route('simpanpembina') }}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama"required autofocus>
                        <span class="help-block with-errors"></span>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
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
                        <!-- /.col -->
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form> 

                <br>


            </div>
            <!-- /.form-box -->
        </div>
@endsection