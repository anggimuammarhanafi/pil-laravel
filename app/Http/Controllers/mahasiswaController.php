<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = mahasiswa::orderBy('npm', 'asc')->get();
        $no = 1;
        return view('mahasiswa.index',compact('mahasiswa', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('npm', $request->npm);
        Session::flash('nama_mahasiswa', $request->nama_mahasiswa);
        Session::flash('tgl_lahir', $request->tgl_lahir);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'npm' => 'required|numeric|unique:mahasiswa,npm',
            'nama_mahasiswa' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required'
        ],
        [
            'npm.required' => 'NPM TIDAK BOLEH KOSONG!',
            'npm.numeric' => 'NPM HARUS DIISI DALAM BENTUK ANGKA',
            'npm.unique' => 'NPM SUDAH ADA SEBELUMNYA',
            'nama_mahasiswa.required' => 'NAMA MAHASISWA TIDAK BOLEH KOSONG!',
            'jk.required' => 'JENIS KELAMIN TIDAK BOLEH KOSONG!',
            'tgl_lahir.required' => 'TANGGAL LAHIR TIDAK BOLEH KOSONG!',
            'alamat.required' => 'ALAMAT TIDAK BOLEH KOSONG!'  
        ]
    );

        $data = [
            'npm' => $request->npm,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ];
        mahasiswa::create($data);
        return redirect('/mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
