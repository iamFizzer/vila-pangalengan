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
}
