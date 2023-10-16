
@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
            <!-- Page Heading -->
            <div class="row">
                <div class="col-12 py-2 text-center">
                    <h1 class="h3 mb-1 text-gray-800">Bidang Program</h1>
                    <p class="mb-1"></p>
                </div>
            </div>

            <!-- DataTales Example -->
            <main class="container border">
                <div class="row">
                    <div class="col-12 py-1">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div  style="overflow-x:auto;">
                                    <form method="post" action="{{ route('dashboard.tabel.bidang.store') }}">
                                        @csrf
                                        <div class="form-group col-6">
                                            <label form="bidang_program" class="form-label">Bidang Program</label>
                                            <input placeholder="Tambahkan Bidang Program..." name="bidang_program" class="form-control @error('bidang_program') is-invalid 
                                            @enderror" id="bidang_program">
                                            @error('bidang_program')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                                {{-- <div class="card-header py-3">
                                    <a href="{{ route('dashboard.tabel.bidang.create') }}">
                                        <button type="button" class="btn btn-primary">Tambah Data</button>
                                    </a> 
                                </div> --}}


                                <div class="card-body">
                                    {{-- <div class="table-responsive"> --}}
                                        <div style="overflow-x:auto;">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Bidang Program</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($bidangs as $key => $item)
                                                    <tr class="border-b border-gray-200">
                                                        <td class="py-3 px-6 text-center">{{$key + 1}}</td>
                                                        <td class="py-3 px-6 text-center">{{$item->bidang_program}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    
@endsection
