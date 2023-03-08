@extends('layouts.app')
@section('content')
<html lang="en">
<head>
    <title>{{ config('app.name') }} - {{ $title }}</title>

</head>

            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
            <a href="/siswa/pendaftaran">
            <i class="fa fa-arrow-left"aria-hidden="true"> Kembali</i>
            </a>
                        <div class="container  col-md-">
                        <div class="card-header"><h3>{{ $title }}</h3></div>
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/siswa/pendaftaran" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1" placeholder="kelas" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Nomor Hp</label>
                                    <input type="text" class="form-control" name="nohp" id="exampleFormControlInput1" placeholder="nohp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" placeholder="alamat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ekstra Pertama</label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra1" required>
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra1 )
                                    <option value="{{ $daftarekstra1->nama }}">{{ $daftarekstra1->nama }}</option>
                                    @endforeach
                                </select>
                                </div> 
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ekstra Kedua </label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra2">
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra2 )
                                    <option value="{{ $daftarekstra2->nama }}">{{ $daftarekstra2->nama }}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ekstra Ketiga </label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra3">
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra3 )
                                    <option value="{{ $daftarekstra3->nama }}">{{ $daftarekstra3->nama }}</option>
                                    @endforeach
                                </select>
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