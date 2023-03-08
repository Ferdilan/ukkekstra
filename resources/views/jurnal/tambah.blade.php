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
                <a href="/jurnal">
                    <i class="fa fa-arrow-left"aria-hidden="true"> Kembali</i>
                </a>
                        <div class="container  col-md-">
                        <div class="card-header"><h3>{{ $title }}</h3></div>
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/jurnal" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ekstra</label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra" required>
                                    <option selected></option>
                                    @foreach( $ekstra as $daftarekstra )
                                    <option value="{{ $daftarekstra->nama }}">{{ $daftarekstra->nama }}</option>
                                    @endforeach 
                                </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" id="exampleFormControlInput1" placeholder="Judul ..." required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Kegiatan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="kegiatan" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
</div>
</body>
</html>
@endsection
