<?php

namespace App\Http\Controllers;

use App\Charts\BidangChart;
use App\Charts\ProgramChart;
use Illuminate\Http\Request;
use App\Models\Programdarwis;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProgramChart $chart, BidangChart $chartbid, Programdarwis $programdarwis)
    {
        $total = Programdarwis::select('program')->sum('jumlah_anggaran');
        $stat = Programdarwis::select('status')->where('status', 'Selesai')->count();
        $program = Programdarwis::select('program')->count('id');
        $jumses = Programdarwis::select('program')->where('status', 'selesai')->sum('jumlah_anggaran');

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'chart' => $chart->build(),
            'chartbid' =>$chartbid->build(),
            'jumlah' => $total,
            'status' => $stat,
            'programdar' => $program,
            'jumlah_selesai' => $jumses
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
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
