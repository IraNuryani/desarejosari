
@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="row">
        {{-- Buat Konten di sini --}}
            <h1 class="h3 mb-2 text-gray-800">Program Pokdarwis</h1>
        <div class="card shadow mb-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end card-header py-3">
                    <a href="{{ route('dashboard.tabel.program.create') }}">
                        <button type="button" class="btn btn-primary">Tambah Data</button>
                    </a> 
                </div>
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
            <div class="card-body">
                    {{-- <div class="table-responsive"> --}}
                        <div style="overflow-x:auto;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bidang Program</th>
                                    <th>Program</th>
                                    <th>Status</th>
                                    <th>Dimulai</th>
                                    <th>Selesai</th>
                                    <th>Lokasi</th>
                                    <th>Luas area/jalan</th>
                                    <th>Jumlah Anggaran</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr class="border-b border-gray-200">
                                        <td class="py-3 px-6 text-center">{{$key + 1}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->bidang->bidang_program}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->program}}</td>
                                        <td class="py-3 px-6 text-center"><label class="label {{ $item->status == 'Rencana' ? 'bg-info text-light' : ($item->status == 'Sedang Berjalan' ? 'bg-warning text-dark' : 'bg-success text-light') }}">{{$item->status}}</label></td>
                                        <td class="py-3 px-6 text-center">{{$item->dimulai}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->selesai}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->lokasi}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->luas_area}}</td>
                                        <td class="py-3 px-6 text-center">{{number_format($item->jumlah_anggaran, 0, ',', '.')}}</td>
                                        <td class="py-3 px-6 text-center">{!!$item->keterangan !!}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            <form onsubmit="return confirm('Yakin mau di hapus? Data yang dihapus tidak bisa kembali');" 
                                                action="{{ route('dashboard.tabel.program.destroy', $item->id) }}" method="post">
                                                
                                                {{-- tombol edit --}}
                                                    <a class="btn btn-warning" href="{{ route('dashboard.tabel.program.edit', $item->id) }}" id="{{ $item->id }}-edit-btn" role="button"><i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                {{-- tombol hapus --}}
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" data-bs-toggle="button" id="{{ $item->id }}-delete-btn" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                                    </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-end mr-4">
                    {{ $data->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
