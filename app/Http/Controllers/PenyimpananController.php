<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class PenyimpananController extends Controller
{
    //
    public function index(){
        $buku = Buku::with('lokasi')->get();

        return view('penyimpanan', compact('buku'));
    }
}
