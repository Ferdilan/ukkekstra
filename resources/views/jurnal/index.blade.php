@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header"><h2>{{ $title }}<h2></div>
                        @if ( Str::length(Auth::guard('pembina')->user()) > 0)
                        @if ( Auth::guard('pembina')->user()->level = "pembina")
                        <div class="card-header">
                        <a class="btn btn-primary" href="/jurnal/create" role="button">Tambah Jurnal Ekstra</a>
                            </div>
                            @endif
                            @endif

                            @if ( Str::length(Auth::guard('kesiswaan')->user()) > 0)
                            @if ( Auth::guard('kesiswaan')->user()->level = "kesiswaan")
                            <div class="card-header">
                            <a class="btn btn-primary" href="{{ route('jurnalexport') }}" role="button">Export Jurnal Ekstra</a>
                            </div>
                            @endif
                            @endif
                            <div class="card-body p-0 table-responsive mt-3" >
                            <table class="table table-striped table-hover mb-0" id="dataTable" >
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Ekstra</th>
                                            <th scope="col">Pengisi Jurnal</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Kegiatan</th>
                                            @if(auth()->user()->level =="kesiswaan")
                                            <th scope="col">Hapus</th>
                                            @endif
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $jurnal as $jurnalekstra )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $jurnalekstra->ekstra }}</td>
                                            <td>{{ $jurnalekstra->pembina }}</td>
                                            <td>{{ $jurnalekstra->tanggal }}</td>
                                            <td>{{ $jurnalekstra->kegiatan }}</td>
                                            @if(auth()->user()->level =="kesiswaan")
                                            <td>
                                            <form action="/jurnal/{{ $jurnalekstra->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2" onclick="return confirm(' Are Yout Sure Delete ')">Delete</button>
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