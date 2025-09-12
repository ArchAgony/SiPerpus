<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class PenyimpananController extends Controller
{
    //
    public function index(){
        $buku = Buku::with('lokasi')->get();

        $buku->transform(function ($item){
            if ($item->lokasi) {
                $lokasi = $item->lokasi->lokasi;
            } else {
                $lokasi = "belum disimpan";
            }
            $item->lokasiBuku = $lokasi;
            return $item;
        });
            
        return view('penyimpanan', compact('buku'));
    }
}
