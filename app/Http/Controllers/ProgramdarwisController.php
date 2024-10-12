<?php

namespace App\Http\Controllers;
use App\Models\Bidang;
use App\Charts\ProgramChart;
use Illuminate\Http\Request;
use App\Models\Programdarwis;

class ProgramdarwisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProgramChart $chart)
    {
        $th = date('Y');
        $thn = Programdarwis::whereYear('dimulai', $th);

        return view('dashboard.tabel.program.index', [
            'title' => 'Program Pokdarwis',
            'data' => Programdarwis::with('bidang')->paginate(5),
            'chart' => $chart->build(),
            'tahun' => $thn
            
        ]);
    }

    public function create()
    {
        return view('dashboard.tabel.program.create', [
                'bidangs' => Bidang::all()
        ]);
    }

    public function store(Request $request)
    {
        
        // try {
        $this->validate($request, [
                'bidang_id' => 'required',
                'program' => 'required',
                'status' => 'required',
                'dimulai' => 'required',
                'selesai' => 'required',
                'lokasi' => 'required',
                'keterangan' => 'required',
                'jumlah_anggaran' => 'required'

        ]);

        $prog = new Programdarwis();
        $prog->bidang_id = $request->bidang_id;
        $prog->program = $request->program;
        $prog->status = $request->status;
        $prog->dimulai = $request->dimulai;
        $prog->selesai = $request->selesai;
        $prog->lokasi = $request->lokasi;
        $prog->luas_area = $request->luas_area;
        $prog->keterangan = $request->keterangan;
        $prog->jumlah_anggaran = $request->jumlah_anggaran;
        
        
        // // digunakan untuk mengembalikan ke tampilan index jika data berhasil di simpan
        $prog->save();
        return redirect()->route('dashboard.tabel.program.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $data = Programdarwis::findOrFail($id);

        return view('detail', [
            "title" =>"Detail",
            "program" => $data
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Programdarwis::findOrFail($id);

        return view('dashboard.tabel.program.edit', compact('data'), [
            'bidangs' => Bidang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bidang_id' => 'required',
            'program' => 'required',
            'status' => 'required',
            'dimulai' => 'required',
            'selesai' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
            'jumlah_anggaran' => 'required'
        ]);

        $data = Programdarwis::findOrFail($id);
        $data->bidang_id = $request->bidang_id;
        $data->program = $request->program;
        $data->status = $request->status;
        $data->dimulai = $request->dimulai;
        $data->selesai = $request->selesai;
        $data->lokasi = $request->lokasi;
        $data->luas_area = $request->luas_area;
        $data->keterangan = $request->keterangan;
        $data->jumlah_anggaran = $request->jumlah_anggaran;

        // digunakan untuk mengembalikan ke tampilan index jika data berhasil di simpan
        $data->update();
        return redirect('/tabel/program')->with('success', 'Berhasil mengedit data');
    }

    public function destroy($id)
    {
        $data = Programdarwis::findOrFail($id);
        $data->delete();

        return redirect()->route('dashboard.tabel.program.index')->with('success', 'Data berhasil di hapus');

    }
}
