@extends('layouts.app')
@section('content')

<div class="card-header"><h2>{{ $title }}<h2></div>
                        @if(auth()->user()->level =="kesiswaan")                        
                        <div class="card-header">
                        <a class="btn btn-primary" href="/anggotaekstra/create" role="button">Tambah Anggota Ekstra</a>
                            </div>
                            @endif
                            <div class="card-body p-0 table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Ekstra</th>
                                            <th scope="col">Ekstra</th>
                                            <th scope="col">Ekstra</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $anggotaekstras as $anggotaekstra )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $anggotaekstra->nama }}</td>
                                            <td>{{ $anggotaekstra->kelas }}</td>
                                            <td>{{ $anggotaekstra->ekstra1 }}</td>
                                            <td>{{ $anggotaekstra->ekstra2 }}</td>
                                            <td>{{ $anggotaekstra->ekstra3 }}</td>
                                            @if(auth()->user()->level =="kesiswaan")
                                            <td>
                                            <a class="badge bg-warning  border-0 p-2 d-inline" href="/anggotaekstra/{{ $anggotaekstra->id }}/edit" >Update</a>
                                            <form action="/anggotaekstra/{{ $anggotaekstra->id }}" method="post" class="d-inline">
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