@extends('layouts.app')
@section('content')
<div class="content">
            <div class="container-fluid content">
            <a href="/daftarekstra">
            <i class="fa fa-arrow-left"aria-hidden="true"> Kembali</i>
            </a>
                        <div class="container  col-md-">
                        <div class="card-header"><h3>{{ $title }}</h3></div>
                        <div class="card-body col-lg-8">
                            <form action="/daftarekstra/{{ $daftar->id }}" method="post">
                            @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Ekstra</label>
                                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" value="{{ old('judul', $daftar->nama) }}" placeholder="Nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3" required>{{ old('deskripsi', $daftar->deskripsi) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
</div>
@endsection