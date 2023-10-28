<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $matkul = [
        [
            'kodemk' => "MK001",
            'nama' => "Web Programming",
            'jurusan' => "TI",
        ],
        [
            'kodemk' => "MK002",
            'nama' => "Database",
            'jurusan' => "TI",
        ],
        [
            'kodemk' => "MK003",
            'nama' => "Network dan Infrastruktur",
            'jurusan' => "SK",
        ],
        [
            'kodemk' => "MK004",
            'nama' => "Digital Image processing",
            'jurusan' => "DGM",
        ],
    ];
    public function index()
    {
        return view('MK.index', ['matkul' => $this->matkul]);
    }

    public function create()
    {
        return view('MK.create');
    }

    public function edit($id)
    {
        return view('MK.edit', ['matkul' => $this->matkul[$id], 'id' => $id]);
    }

    public function show($id)
    {
    }
}
