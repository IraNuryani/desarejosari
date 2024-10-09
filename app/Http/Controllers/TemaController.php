<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Models\TemaWisata;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tema.index', [
            'title' => 'Tema Wisata',
            "temawis" => TemaWisata::orderBy('id','ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tema.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tema_wisata' => 'required'
        ]);

        TemaWisata::create([
            'tema_wisata' => $request->tema_wisata
        ]);

        // digunakan untuk mengembalikan ke tampilan index jika data berhasil di simpan
        return redirect()->route('dashboard.tema.index')->with('success', 'Data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = TemaWisata::findOrFail($id);

        return view('dashboard.tema.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tema_wisata' => 'required'
        ]);

        $data = TemaWisata::findOrFail($id);

        $data->update([
            'tema_wisata' => $request->tema_wisata
        ]);

        // digunakan untuk mengembalikan ke tampilan index post jika data berhasil di simpan
        return redirect()->route('dashboard.tema.index')->with('success', 'Data berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = TemaWisata::findOrFail($id);
        $data->delete();

        return redirect()->route('dashboard.tema.index')->with('success', 'Data berhasil di hapus!');
    }
}
