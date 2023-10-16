<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$bidangs = Bidang::orderBy('id','ASC')->get(); 
        // $data = Bidang::all();

        // dd($bidangs);

        return view('dashboard.tabel.bidang.index', [
            'title' => 'Bidang Program',
            "bidangs" => Bidang::orderBy('id','ASC')->get()
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tabel.bidang.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bidang_program' => 'required'
        ]);

        Bidang::create([
            'bidang_program' => $request->bidang_program
        ]);

        // digunakan untuk mengembalikan ke tampilan index jika data berhasil di simpan
        return redirect()->route('dashboard.tabel.bidang.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Bidang $bidang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bidang $bidang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bidang $bidang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bidang $bidang)
    {
        //
    }
}
