
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
                                    <form method="post" action="{{ route('dashboard.tema.store') }}">
                                        @csrf
                                        <div class="form-group col-6">
                                            <label form="tema_wisata" class="form-label">Tema Wisata</label>
                                            <input placeholder="Tambahkan Tema Wisata ..." name="tema_wisata" class="form-control @error('tema_wisata') is-invalid 
                                            @enderror" id="tema_wisata">
                                            @error('tema_wisata')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        @if (session()->has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                                <div class="card-body">
                                        <div style="overflow-x:auto;">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Tema Wisata</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($temawis as $key => $item)
                                                    <tr class="border-b border-gray-200">
                                                        <td class="py-3 px-6 text-center">{{$key + 1}}</td>
                                                        <td class="py-3 px-6 text-center">{{$item->tema_wisata}}</td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                            <form onsubmit="return confirm('Yakin mau di hapus? Data yang dihapus tidak bisa kembali');" 
                                                                action="{{ route('dashboard.tema.destroy', $item->id) }}" method="post">
                                                                
                                                                {{-- tombol edit --}}
                                                                    <a class="btn btn-warning" href="{{ route('dashboard.tema.edit', $item->id) }}" id="{{ $item->id }}-edit-btn" role="button"><i class="fa-solid fa-pen-to-square"></i>
                                                                    </a>
                    
                                                                {{-- tombol hapus --}}
                                                                @csrf
                                                                @method('DELETE')
                                                                    <button type="submit" id="{{ $item->id }}-delete-btn" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                            </form>
                                                        </td>
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
