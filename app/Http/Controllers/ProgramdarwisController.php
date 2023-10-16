<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\Programdarwis;

class ProgramdarwisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tabel.program.index', [
            'title' => 'Program Pokdarwis',
            "programs" => Programdarwis::orderBy('id','ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tabel.program.create', [
                'bidangs' => Bidang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Programdarwis $programdarwis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programdarwis $programdarwis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programdarwis $programdarwis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programdarwis $programdarwis)
    {
        //
    }
}
