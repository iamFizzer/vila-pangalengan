<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = Destinasi::all();
        // dd($data);
        return view('index', compact('data'));
    }
}
