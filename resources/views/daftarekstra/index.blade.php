@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header"><h2>{{ $title }}<h2></div>
                        <div class="card-header">
                        <a class="btn btn-primary" href="/daftarekstra/create" role="button">Tambah Ekstra</a>
                            </div>
                            <div class="card-body p-0 table-responsive mt-3">
                            <table class="table table-striped table-hover mb-0 text-alignment="justify" id="dataTable">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $daftarekstras as $daftarekstra )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $daftarekstra->nama }}</td>
                                            <td>{{ $daftarekstra->deskripsi }}</td>
                                            <td>
                                            <a class="badge bg-warning  border- p-2 d-inline" href="/daftarekstra/{{ $daftarekstra->id }}/edit" >Update</a>
                                            <form action="/daftarekstra/{{ $daftarekstra->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2 mt-3" onclick="return confirm(' Are Yout Sure Delete ')">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>
</div>
@endsection