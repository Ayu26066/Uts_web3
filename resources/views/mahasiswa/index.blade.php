@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                <a href="{{route('mahasiswa.create')}}" class="float-end btn-sm btn btn-primary">Create</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Tempat_Lahir</th>
                                <th scope="col">tanggal_Lahir</th>
                                <th width="170">Aksi</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswas as $s)
                            <tr>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->tempat_lahir }}</td>
                                <td>{{ $s->tanggal_lahir }}</td>
                                <td>
                                <a href="{{route('mahasiswa.show', $s->id)}}" class="btn btn-success btn-sm">Show</a>
                                <a href="{{route('mahasiswa.edit', $s->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $s->id)}}" method="POST"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $mahasiswas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
