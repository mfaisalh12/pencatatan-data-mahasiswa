<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function index()
    {
        $data_mhs = \App\mahasiswa::all();
        return view('mhs.index',['data_mhs' => $data_mhs ]);
    }

    public function create(Request $request)
    {
        \App\mahasiswa::create($request->all());
        return redirect('mahasiswa')->with('sukses','Data berhasil di input');
    }
    public function edit($id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        return view('mhs/edit',['mahasiswa' => $mahasiswa]);
    }
    public function update(Request $request,$id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->update($request-> all());
        return redirect('/mahasiswa')->with('sukses','Data berhasil di update');
    }
    public function delete($id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('sukses','Data berhasil di hapus');
    }
}
