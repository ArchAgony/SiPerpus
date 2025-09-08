<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    // function untuk menampilkan view halaman utama dari menu lokasi
    public function index()
    {
        // memanggil atau mengambil seluruh data dari tb_lokasi
        $lokasi = Lokasi::all();

        // melakukan parsing data ke view index
        return view('lokasi/index', ['lokasi' => $lokasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lokasi/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Lokasi::create([
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/lokasi');
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
    // public function edit(string $id)
    public function edit(string $id)
    {
        $lokasi = Lokasi::findOrFail($id);

        return view('lokasi/edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $lokasi = Lokasi::find($id);

        $lokasi->lokasi = $request->lokasi;
        $lokasi->deskripsi = $request->deskripsi;
        $lokasi->save();
        return redirect('/lokasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Lokasi::where('id', $id)->delete();
        return redirect('/lokasi');
    }
}
