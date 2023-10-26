@extends('layout.master')

@section('title', 'Tambah Matakuliah')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/MK') }}">Mata Kuliah</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah Matakuliah</h4>
            </div>
        </div>
        <form action="{{ url('/MK') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">Kode Matakuliah</label>
                    <input class="form-control" type="text" name="kodemk">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option value="1">TI</option>
                        <option value="2">SK</option>
                        <option value="3">DGM</option>
                        <option value="3">BD</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
