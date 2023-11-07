<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MKController extends Controller
{

    public function index()
    {
        $mk = DB::table('mk')
        ->select("mk.id", "kodemk", "mk.nama", "jurusan_id", "jurusan.nama AS jurusan_nama")
        ->join('jurusan', 'jurusan.id', '=', 'mk.jurusan_id')
        ->get();

        return view('MK.index', ['matkul' => $mk]);
    }

    public function create()
    {
        return view('MK.create');
    }

    public function edit($id)
    {
        $mk = DB::table('mk')
        ->select("mk.id", "kodemk", "mk.nama", "jurusan_id", "jurusan.nama AS jurusan_nama")
        ->join('jurusan', 'jurusan.id', '=', 'mk.jurusan_id')
        ->where('mk.id', $id)
        ->first();

        $jurusan = DB::table('jurusan')->get();

        return view('MK.edit', ['matkul' => $mk, 'id' => $id, 'jurusan' => $jurusan]);
    }

    public function show($id)
    {
    }
}
