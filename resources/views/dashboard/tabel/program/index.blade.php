
@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Program Pokdarwis</h1>
            {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                For more information about DataTables, please visit the <a target="_blank"
                    href="https://datatables.net">official DataTables documentation</a>.</p> --}}

            <!-- DataTales Example -->
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{ route('dashboard.tabel.program.create') }}">
                        <button type="button" class="btn btn-primary">Tambah Data</button>
                    </a> 
                </div>
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
                                    <th>Tahun</th>
                                    <th>Lokasi</th>
                                    <th>Luas area/jalan</th>
                                    <th>Jumlah Anggaran</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($programs as $key => $item)
                                    <tr class="border-b border-gray-200">
                                        <td class="py-3 px-6 text-center">{{$key + 1}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->bidang_id->bidang_program}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->program}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->status}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->dimulai}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->selesai}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->tahun}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->lokasi}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->luas_area}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->jumlah_anggaran}}</td>
                                        <td class="py-3 px-6 text-center">{{$item->keterangan}}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- <table class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
