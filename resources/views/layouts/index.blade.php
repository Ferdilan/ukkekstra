@extends('layouts.app')
@section('content')
<div class="content">
    <div class="card-header">
        <!-- DataTales Example -->
        <div class="card mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary float-left">{{ $title }}</h3>
                <button type="button" class="float-right btn btn-primary btn" onclick="getCreate()" data-toggle="modal"
                    data-target="#form-create"><i class="fa fa-plus"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-custom" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">User</th>
                                <th scope="col">Tanggal Bayar</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $dus as $du )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $du->kdtrx_du }}</td>
                                <td>{{ $du->siswa->nis }} {{ $du->siswa->nama }}</td>
                                <td>{{ $du->tgl_bayar }}</td>
                                <td>Rp. {{ $du->jumlah }}</td>
                                <td class="budget">
                                    <span class="d-flex">
                                        <a class="btn btn-circle btn-info border-0 m-1" onclick="getDetail()"
                                            data-toggle="modal" data-target="#form-detail{{ $du->id }}"><i
                                                class="fa fa-eye"></i></a>
                                        <a class="btn btn-circle btn-primary border-0 m-1" onclick="getEdit()"
                                            data-toggle="modal" data-target="#form-edit{{ $du->id }}"><i
                                                class="fa fa-pen"></i></a>
                                        <form action="/du/{{ $du->id }}" method="post" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-circle btn-danger border-0 m-1"
                                                onclick="return confirm(' Apakah Kamu Yakin Akan Dihapus? ')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL -->
@include('du.add')
@include('du.edit')
@include('du.detail')

@endsection