<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programdarwis;

class ProgramUserController extends Controller
{
    public function index()
    {
        $programs = Programdarwis::join('bidangs', 'bidangs.id','=','programdarwis.bidang_id')->select([
            'programdarwis.id',
            'bidangs.bidang_program',
            'programdarwis.status',
            'programdarwis.program',
            'programdarwis.dimulai',
            'programdarwis.selesai',
            'programdarwis.lokasi',
            'programdarwis.luas_area',
            'programdarwis.keterangan',
            'programdarwis.jumlah_anggaran'

            ])->orderBy('programdarwis.id', 'asc')->get();
        return view('programdarwis', [
            'title' => 'Program Pokdarwis',
            'data' => $programs
        ]);
    }
}
