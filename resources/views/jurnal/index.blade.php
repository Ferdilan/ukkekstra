@extends('layouts.app')
@section('content')
<!-- <form class="form" method="get" action="">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form> -->

<!-- <div class="row g-3 align-items-center">
  <div class="col-auto">
    <form action="/jurnal" method="GET">
        <input type="search" id="search" name="search" class="form-control" aria-describedby="passwordHelpInline"></inut>
</form>
  </div>
</div> -->

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

                            <div class="card-body p-0 table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Ekstra</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Kegiatan</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $jurnal as $jurnalekstra )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $jurnalekstra->ekstra }}</td>
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
@endsection