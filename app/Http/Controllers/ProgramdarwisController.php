<?php

namespace App\Http\Controllers;

use App\Models\Programdarwis;
use Illuminate\Http\Request;

class ProgramdarwisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tabel.programdar', [
            'title' => 'Program Pokdarwis'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tabel.create');
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
