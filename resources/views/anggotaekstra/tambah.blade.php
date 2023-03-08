@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - {{ $title }}</title>

</head>

      

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
            <a href="/anggotaekstra">
            <i class="fa fa-arrow-left"aria-hidden="true"> Kembali</i>
            </a>
                        <div class="container  col-md-">
                        <div class="card-header"><h3>{{ $title }}</h3></div>
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/anggotaekstra" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1" placeholder="kelas" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ekstra Yang Diikuti</label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra1" required>
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra1 )
                                    <option value="{{ $daftarekstra1->nama }}">{{ $daftarekstra1->nama }}</option>
                                    @endforeach 
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ekstra Yang Diikuti</label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra2">
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra2 )
                                    <option value="{{ $daftarekstra2->nama }}">{{ $daftarekstra2->nama }}</option>
                                    @endforeach 
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ekstra Yang Diikuti</label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra3">
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra3 )
                                    <option value="{{ $daftarekstra3->nama }}">{{ $daftarekstra3->nama }}</option>
                                    @endforeach 
                                </select>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                    </div>
                </div>
            </div>
</body>
</html>
@endsection
