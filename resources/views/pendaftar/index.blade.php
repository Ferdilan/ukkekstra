@extends('layouts.app')
@section('content')

<div class="card">
@if(Auth::check() && (Auth::user()->level == 'pembina' || Auth::user()->level == 'kesiswaan'))
<div class="card-header"><h2>{{ $titlepembina }}<h2></div>
@endif
@if(auth()->user()->level =="siswa")
<div class="card-header"><h2>{{ $title }}<h2></div>
@endif
@if(auth()->user()->level =="kesiswaan")
<div class="card-header">
<a class="btn btn-primary" href="{{ route('pendaftarexport') }}" role="button">Export Pendaftar Ekstra</a>
</div>
@endif
                        @if(auth()->user()->level =="siswa")
                        <div class="card-header">
                        <a class="text-danger">Anda hanya dapat melakukan pendaftaran sebanyak satu kali</a><br>
                        <a class="btn btn-primary" href="/siswa/pendaftaran/create" role="button">Pendaftaran Ekstra</a>
                        </div>
                        @endif
                            <div class="card-body p-0 table-responsive mt-3 ">
                            <table class="table table-striped table-hover mb-0" id="dataTable">
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
                                            @if(Auth::check() && (Auth::user()->level == 'pembina' || Auth::user()->level == 'kesiswaan'))
                                            <th scope="col">Konfirmasi Pertama</th>
                                            <th scope="col">Konfirmasi Kedua</th>
                                            <th scope="col">Konfirmasi Ketiga</th>
                                            @endif
                                            @if(auth()->user()->level =="kesiswaan")
                                            <th scope="col">Hapus</th>
                                            @endif
                                        </tr>
                                </thead>
                            
                                <tbody>
                                @foreach( $pendaftars as $pendaftar )
                                        <tr>
                                        @if( $pendaftar->nama == Auth::guard()->user()->nama)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pendaftar->nama }}</td>
                                            <td>{{ $pendaftar->kelas }}</td>
                                            <td>{{ $pendaftar->nohp }}</td>
                                            <td>{{ $pendaftar->alamat }}</td>
                                            <td>{{ $pendaftar->ekstra1 }}</td>
                                            <td>{{ $pendaftar->ekstra2 }}</td>
                                            <td>{{ $pendaftar->ekstra3 }}</td>
                                        @elseif(auth()->user()->level =="pembina")
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pendaftar->nama }}</td>
                                            <td>{{ $pendaftar->kelas }}</td>
                                            <td>{{ $pendaftar->nohp }}</td>
                                            <td>{{ $pendaftar->alamat }}</td>
                                            <td>{{ $pendaftar->ekstra1 }}</td>
                                            <td>{{ $pendaftar->ekstra2 }}</td>
                                            <td>{{ $pendaftar->ekstra3 }}</td>
                                        @elseif(auth()->user()->level =="kesiswaan")
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pendaftar->nama }}</td>
                                            <td>{{ $pendaftar->kelas }}</td>
                                            <td>{{ $pendaftar->nohp }}</td>
                                            <td>{{ $pendaftar->alamat }}</td>
                                            <td>{{ $pendaftar->ekstra1 }}</td>
                                            <td>{{ $pendaftar->ekstra2 }}</td>
                                            <td>{{ $pendaftar->ekstra3 }}</td>
                                        @endif

                                            <!-- Tabel Konfirmasi -->
                                            <!-- if untuk auth pembina dan kesiswaan -->
                                            @if(Auth::check() && (Auth::user()->level == 'pembina' || Auth::user()->level == 'kesiswaan'))
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
                                    @if($pendaftar->konfirmasi == "Diterima")
                                    <h5><span class="badge badge-success text-white">{{ $pendaftar->konfirmasi }}</span></h5>
                                    @else($pendaftar->konfirmasi == "Tidak Diterima")
                                    <h5><span class="badge badge-danger text-white">{{ $pendaftar->konfirmasi }}</span></h5>
                                    @endif
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
                                    @if($pendaftar->konfirmasi2 == "Diterima")
                                    <h5><span class="badge badge-success text-white">{{ $pendaftar->konfirmasi2 }}</span></h5>
                                    @else($pendaftar->konfirmasi2 == "Tidak Diterima")
                                    <h5><span class="badge badge-danger text-white">{{ $pendaftar->konfirmasi2 }}</span></h5>
                                    @endif
                                    
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
                                    @if($pendaftar->konfirmasi3 == "Diterima")
                                    <h5><span class="badge badge-success text-white">{{ $pendaftar->konfirmasi3 }}</span></h5>
                                    @else($pendaftar->konfirmasi3 == "Tidak Diterima")
                                    <h5><span class="badge badge-danger text-white">{{ $pendaftar->konfirmasi3 }}</span></h5>
                                    @endif
                                </td>
                                @endif
                                <!-- endif untuk akhiran auth kesiswan dan pembina  -->

                                @if(auth()->user()->level =="kesiswaan")
                                <td>
                                            <form action="/pendaftaran/{{ $pendaftar->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2" onclick="return confirm(' Yakin Menghapus Pendaftar? ')">Hapus</button>
                                            </form>
                                            </td>
                                @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                        
</div>
</div>
@endsection