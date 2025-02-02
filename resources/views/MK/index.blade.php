@extends('layout.master')

@section('title', 'Mata Kuliah')

@section('breadcrumb')
    <li class="breadcrumb-item active">Mata Kuliah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Tabel Mata Kuliah</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/mk/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kode Mataka Kuliah</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matkul as $m)
                        <tr>
                            <td>{{ $m->kodemk }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->jurusan_nama }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/mk/' . $m->id . '/edit') }}">Ubah</a>
                                <form style="display: inline;" action="{{ url('/mk/' . $m->id) }}" method ="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
