<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function paket()
    {
        $data = Paket::all();
        return view('admin.content.paket.index', compact('data'));
    }

    public function tambah()
    {
        return view('admin.content.paket.create');
    }
    public function store(Request $request) 
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'desk' => 'required',
            'satuan' =>'required',
            'foto' => 'required|mimes:jpg,jpeg,png,gif,svg|max
            :2048',
            ]);
            $file = $request->file('foto');
            $nama_file = $request->nama. '.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar/paket'), $nama_file);
            $paket = new Paket();
            $paket->nama_paket= $request->nama;
            $paket->harga = $request->harga;
            $paket->deskripsi = $request->desk;
            $paket->satuan = $request->satuan;
            $paket->foto = $nama_file;
            $paket->save();
            return redirect()->route('paket')->with('success', 'Data Berhasil Ditambahkan');
    }
}
