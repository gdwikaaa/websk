@extends('layout.master')

@section('title', 'Ubah Mahasiswa')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/mk') }}">Matakuliah</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah Mata Kuliah</h4>
            </div>
        </div>
        <form action="{{ url('/mk/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">KodeMK</label>
                    <input class="form-control" type="text" name="nim" value="{{ $matkul['kodemk'] }}">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $matkul['nama'] }}">
                </div>
                <div>
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option {{ $matkul['jurusan'] == 'TI' ? 'selected' : '' }} value="TI">TI</option>
                        <option {{ $matkul['jurusan'] == 'SK' ? 'selected' : '' }} value="SK">SK</option>
                        <option {{ $matkul['jurusan'] == 'DGM' ? 'selected' : '' }} value="DGM">DGM</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
