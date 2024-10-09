<?php

namespace App\Http\Controllers;

use App\Models\TemaWisata;
use App\Http\Requests\StoreTemaWisataRequest;
use App\Http\Requests\UpdateTemaWisataRequest;

class TemaWisataController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemaWisataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TemaWisata $temaWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TemaWisata $temaWisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemaWisataRequest $request, TemaWisata $temaWisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TemaWisata $temaWisata)
    {
        //
    }
}
