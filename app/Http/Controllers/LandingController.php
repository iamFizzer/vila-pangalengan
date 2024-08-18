<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Paket;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        $data = Destinasi::all();
        // dd($data);
        return view('index', compact('data','paket'));
    }
}
