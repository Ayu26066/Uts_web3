@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Mahasiswa</div>
                <div class="card-body">
                    <p><strong>Nama          :</strong> {{ $mahasiswa->nama }}</p>
                    <p><strong>NIM           :</strong> {{ $mahasiswa->nim }}</p>
                    <p><strong>Tempat Lahir  :</strong> {{ $mahasiswa->tempat_lahir }}</p>
                    <p><strong>Tanggal Lahir :</strong> {{ $mahasiswa->tanggal_lahir }}</p>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection