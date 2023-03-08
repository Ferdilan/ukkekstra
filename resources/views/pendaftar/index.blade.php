@extends('layouts.app')
@section('content')

@if(auth()->user()->level =="pembina")
<div class="card-header"><h2>{{ $titlepembina }}<h2></div>
@endif
@if(auth()->user()->level =="siswa")
<div class="card-header"><h2>{{ $title }}<h2></div>
@endif
                        @if(auth()->user()->level =="siswa")
                        <div class="card-header">
                        <a class="btn btn-primary" href="/siswa/pendaftaran/create" role="button">Pendaftaran Ekstra</a>
                        </div>
                        @endif
                            <div class="card-body p-0 table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Nomor Hp</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Ekstra Pertama</th>
                                            <th scope="col">Ekstra Kedua</th>
                                            <th scope="col">Ekstra Ketiga</th>
                                            <th scope="col">Konfirmasi Pertama</th>
                                            <th scope="col">Konfirmasi Kedua</th>
                                            <th scope="col">Konfirmasi Ketiga</th>
                                            <th scope="col">Hapus</th>
                                        </tr>
                                </thead>
                            
                                <tbody>
                                @foreach( $pendaftars as $pendaftar )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pendaftar->nama }}</td>
                                            <td>{{ $pendaftar->kelas }}</td>
                                            <td>{{ $pendaftar->nohp }}</td>
                                            <td>{{ $pendaftar->alamat }}</td>
                                            <td>{{ $pendaftar->ekstra1 }}</td>
                                            <td>{{ $pendaftar->ekstra2 }}</td>
                                            <td>{{ $pendaftar->ekstra3 }}</td>
                                            
                                            <!-- Tabel Konfirmasi -->
                                            <td>
                                @if(auth()->user()->level =="pembina")
                                    @if(empty($pendaftar->konfirmasi))
                                    <form action="/pendaftaran/konfirmasi/{{ $pendaftar->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="konfirmasi" value="Diterima">
                                        <h5><button class="badge bg-success border-0 text-white"
                                                onclick="return confirm(' Apakah Kamu Yakin Dengan Ini?')">Terima</button>
                                        </h5>
                                    </form>
                                    <form action="/pendaftaran/konfirmasi/{{ $pendaftar->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="konfirmasi" value="Tidak Diterima">
                                        <h5><button class="badge bg-danger border-0 text-white"
                                                onclick="return confirm(' Apakah Kamu Yakin Dengan Ini?')">Tidak
                                                Diterima</button></h5>
                                    </form>
                                    @else
                                    @endif
                                    @endif
                                    <h5><span class="badge badge-warning text-white">{{ $pendaftar->konfirmasi }}</span></h5>
                                </td>
                                
                                <!-- konfirmasi2 -->
                                <td>
                                @if(auth()->user()->level =="pembina")
                                    @if(empty($pendaftar->konfirmasi2))
                                    <form action="/pendaftaran/konfirmasi2/{{ $pendaftar->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="konfirmasi2" value="Diterima">
                                        <h5><button class="badge bg-success border-0 text-white"
                                                onclick="return confirm(' Apakah Kamu Yakin Dengan Ini?')">Terima</button>
                                        </h5>
                                    </form>
                                    <form action="/pendaftaran/konfirmasi2/{{ $pendaftar->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="konfirmasi2" value="Tidak Diterima">
                                        <h5><button class="badge bg-danger border-0 text-white"
                                                onclick="return confirm(' Apakah Kamu Yakin Dengan Ini?')">Tidak
                                                Diterima</button></h5>
                                    </form>
                                    @else
                                    @endif
                                    @endif
                                    <h5><span class="badge badge-warning text-white">{{ $pendaftar->konfirmasi2 }}</span></h5>
                                </td>

                                <!-- konfirmasi3 -->
                                <td>
                                @if(auth()->user()->level =="pembina")
                                    @if(empty($pendaftar->konfirmasi3))
                                    <form action="/pendaftaran/konfirmasi3/{{ $pendaftar->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="konfirmasi3" value="Diterima">
                                        <h5><button class="badge bg-success border-0 text-white"
                                                onclick="return confirm(' Apakah Kamu Yakin Dengan Ini?')">Terima</button>
                                        </h5>
                                    </form>
                                    <form action="/pendaftaran/konfirmasi3/{{ $pendaftar->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="konfirmasi3" value="Tidak Diterima">
                                        <h5><button class="badge bg-danger border-0 text-white"
                                                onclick="return confirm(' Apakah Kamu Yakin Dengan Ini?')">Tidak
                                                Diterima</button></h5>
                                    </form>
                                    @else
                                    @endif
                                    @endif
                                    <h5><span class="badge badge-warning text-white">{{ $pendaftar->konfirmasi3 }}</span></h5>
                                </td>
                                <td>
                                            <form action="/pendaftaran/{{ $pendaftar->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2" onclick="return confirm(' Yakin Menghapus Pendaftar? ')">Hapus</button>
                                            </form>
                                            </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                        
</div>

<!-- Logout Modal-->
<div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin dengan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Kembali</button>
                <a class="btn btn-primary" href="/logout">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection