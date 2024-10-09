<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{

    public function index()
    {
        return view('dashboard.tabel.bidang.index', [
            'title' => 'Bidang Program',
            "bidangs" => Bidang::orderBy('id','ASC')->get()
           
        ]);
    }

    public function create()
    {
        return view('dashboard.tabel.bidang.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'bidang_program' => 'required'
        ]);

        Bidang::create([
            'bidang_program' => $request->bidang_program
        ]);

        // digunakan untuk mengembalikan ke tampilan index jika data berhasil di simpan
        return redirect()->route('dashboard.tabel.bidang.index')->with('success', 'Data berhasil di tambahkan');

    }

    public function show(Bidang $bidang)
    {
        //
    }

    public function edit($id)
    {
        $data = Bidang::findOrFail($id);

        return view('dashboard.tabel.bidang.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'bidang_program' => 'required'
        ]);

        $data = Bidang::findOrFail($id);

        $data->update([
            'bidang_program' => $request->bidang_program
        ]);

        // digunakan untuk mengembalikan ke tampilan index post jika data berhasil di simpan
        return redirect()->route('dashboard.tabel.bidang.index')->with('success', 'Data berhasil di Edit!');
    }

    public function destroy($id)
    {
        $data = Bidang::findOrFail($id);
        $data->delete();

        return redirect()->route('dashboard.tabel.bidang.index')->with('success', 'Data berhasil di hapus!');
    }
}
