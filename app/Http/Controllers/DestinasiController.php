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
   public function detail($destination_id)
   {
     $data = Destinasi::find($destination_id);
    //  dd($data);
     return view('admin.content.destinasi.detail', compact('data'));
   }

   public function edit($destination_id)
   {
     $data = Destinasi::find($destination_id);
    //  dd($data);
     return view('admin.content.destinasi.update', compact('data'));
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

   public function update (Request $request, $id)
   {
    if ($request->foto == null) {
      $destination = Destinasi::find($id);
      $destination->destination_name = $request->nama;
      $destination->price_weekday = $request->weekday;
      $destination->price_weekend = $request->weekend;
      $destination->desc = $request->desk;
      $destination->update();
      
    } else {
      $destination = Destinasi::find($id);
      $destination->destination_name = $request->nama;
      $destination->price_weekday = $request->weekday;
      $destination->price_weekend = $request->weekend;
      $destination->desc = $request->desk;
      $destination->destination_pict = $request->nama.'edit.'.$request->foto
      ->getClientOriginalExtension();
      $destination->update();
      $request->foto->move(public_path('gambar'),$destination->destination_pict);
      
    }
    return redirect()->route('destinasi')->with('success', 'Data Berhasil Diubah');
        
   }

   public function delete($id){
    $destination = Destinasi::find($id);
    $destination->delete();
    return redirect()->route('destinasi')->with('success', 'Data Berhasil Dihapus');
    
   }

}
