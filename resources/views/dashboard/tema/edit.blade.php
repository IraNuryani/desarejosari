
@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
            <!-- Page Heading -->
            <div class="row">
                <div class="col-12 py-2 text-center">
                    <h1 class="h3 mb-1 text-gray-800">Tema Wisata</h1>
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
                                    <form method="post" action="{{ route('dashboard.tema.update', $data->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group col-6">
                                            <label form="tema_wisata" class="form-label">Tema Wisata</label>
                                            <input placeholder="Tambahkan Bidang Program..." name="tema_wisata" value="{{ $data->tema_wisata }}" class="form-control">
                                        </div>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    
@endsection
