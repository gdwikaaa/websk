@extends('layout.master')

@section('title', 'Ubah Mahasiswa')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah Mahasiswa</h4>
            </div>
        </div>
        <form action="{{ url('/mahasiswa/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">NIM</label>
                    <input class="form-control" type="text" name="nim" value="{{ $data['nim'] }}">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $data['nama'] }}">
                </div>
                <div>
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option {{ $data['jurusan'] == 'TI' ? 'selected' : '' }} value="TI">TI</option>
                        <option {{ $data['jurusan'] == 'SK' ? 'selected' : '' }} value="SK">SK</option>
                        <option {{ $data['jurusan'] == 'DGM' ? 'selected' : '' }} value="DGM">DGM</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
