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
        $jurusan = DB::table('jurusan')->get();
       
        return view('MK.create', ['jurusan' => $jurusan]);
    }

    public function store(Request $request)
    {
        DB::table('mk')->insert([
            'kodemk' => $request->kodemk,
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan,
        ]);

        return redirect(url('/mk'));
    }

    public function update(Request $request, $id)
    {
        DB::table('mk')
        ->where('id', $id)
        ->update([
            'kodemk' => $request->kodemk,
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan,
        ]);

        return redirect(url('/mk'));
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
    public function destroy($id)
    {
        DB::table('mk')
        ->where('id', $id)
        ->delete();

        return redirect(url('/mk'));
}
}