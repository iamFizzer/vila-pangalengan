<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // For Destination
   public function destinasi()
   {
    $data = Destinasi::all();
     return view('admin.content.destinasi.index', compact('data'));
   }
   public function tambah()
   {
     return view('admin.content.destinasi.create');
   }
   public function store(Request $request)
   {
    $galeri = Destinasi::count();
    $request->validate([
      'nama' => 'required',
      'weekend' => 'required',
      'weekday' => 'required',
      'foto' => [
                  'required',
                  'mimes:jpg,jpeg,png',
                  'max:2048'
                ]
              ]);
    $imageName = $request->nama.'.'.$request->foto->extension();
    $request->foto->move(public_path('gambar'),$imageName);

    $destination = new Destinasi();
    $destination->destination_name = $request->nama;
    $destination->price_weekday = $request->weekday;
    $destination->price_weekend = $request->weekend;
    $destination->destination_pict = $imageName;
    $destination->galeri_id = $galeri + 1;
    $destination->desc = $request->desk;
    $destination->save();
    return redirect()->route('destinasi')->with('success', 'Data Berhasil Ditambah');
   }

}
