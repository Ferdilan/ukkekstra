@extends('layouts.app')
@section('content')

<div class="card-header"><h2>Daftar Pembina<h2></div>
                        <div class="card-header">
                        <a class="btn btn-primary" href="/tambahpembina" role="button">Tambah Pembina</a>
                            </div>
                            <div class="card-body p-0 table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th> 
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $pembinas as $pembina ) 
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pembina->nama }}</td>
                                            <td>{{ $pembina->email }}</td>
                                            <td>{{ $pembina->password }}</td>
                                            <td>
                                            <form action="/daftarpembina/{{ $pembina->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2" onclick="return confirm(' Are Yout Sure Delete ')">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            </div>
</div>
@endsection