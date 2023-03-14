@extends('layouts.app')
@section('content')
<html lang="en">
<head>
    <title>{{ config('app.name') }} - {{ $title }}</title>

</head>

            <!-- Main content -->
            <div class="card">
            <div class="card-header">
                <h3>{{ $title }}</h3>
            </div>
            <div class="content">
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/siswa/pendaftaran" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" value="{{Auth::guard('user')->user()->nama}}" name="nama" id="exampleFormControlInput1" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Nomor Handphone</label>
                                    <input type="text" class="form-control" name="nohp" id="exampleFormControlInput1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ekstra1" class="form-label">Ekstra Pertama</label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra1" required>
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra1 )
                                    <option value="{{ $daftarekstra1->nama }}">{{ $daftarekstra1->nama }}</option>
                                    @endforeach
                                </select>
                                </div> 
                                <div class="mb-3">
                                    <label for="ekstra2" class="form-label">Ekstra Kedua </label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra2">
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra2 )
                                    <option value="{{ $daftarekstra2->nama }}">{{ $daftarekstra2->nama }}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ekstra3" class="form-label">Ekstra Ketiga </label>
                                    <select class="form-control " id="exampleFormControlTextarea1" name="ekstra3">
                                    <option selected></option>
                                    @foreach( $daftarekstra as $daftarekstra3 )
                                    <option value="{{ $daftarekstra3->nama }}">{{ $daftarekstra3->nama }}</option>
                                    @endforeach
                                </select>
                                </div>

                                <!-- Checkbox untuk mengaktifkan tombol daftar -->
                                <label for="agree">
                                <input type="checkbox" id="agree" onchange="toggleButton()">
                                Anda hanya dapat melakukan pendaftaran sebanyak satu kali. Pastikan data yang anda masukkan benar.
                                    Setelah menekan tombol daftar maka anda tidak bisa mengubah pilihan anda. </label>
                                
                                <!-- Tombol daftar yang dinonaktifkan secara default -->
                                <button id="submit-btn" type="submit" class="btn btn-primary" disabled>Daftar</button>
                                
                                <!-- Script JavaScript untuk mengubah atribut "disabled" pada tombol daftar -->
                                <script>
                                function toggleButton() {
                                  var checkbox = document.getElementById("agree");
                                  var button = document.getElementById("submit-btn");
                                
                                  if (checkbox.checked == true) {
                                    button.disabled = false;
                                  } else {
                                    button.disabled = true;
                                  }
                                }
                                </script>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>
@endsection