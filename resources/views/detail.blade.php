@extends('layouts.main')

@section('container')
<main class="container border">
    <div class="row">
        <div class="col-md-3 py-5"></div>
        <div class="col-md-6 py-5" style="background-color: #ffffff">
            <h1>Detail Program Pokdarwis</h1>
            <p style="font-family: Cambria, serif;"> Program  &emsp;&emsp;&emsp;&emsp; : &emsp; {{ $program->program }}</p>
            <p style="font-family: Cambria, serif;"> Status  &emsp;&emsp;&emsp;&emsp;&emsp; : &emsp;<label class="label {{ $program->status == 'Rencana' ? 'bg-info text-light' : ($program->status == 'Sedang Berjalan' ? 'bg-warning text-dark' : 'bg-success text-light') }}">{{$program->status}}</label></p>
            <p style="font-family: Cambria, serif;"> Dimulai &emsp;&emsp;&emsp;&emsp; &nbsp;: &emsp;{{ $program->dimulai}}</p>
            <p style="font-family: Cambria, serif;"> Selesai &emsp;&emsp;&emsp;&emsp;&emsp;: &emsp;{{ $program->selesai }}</p>
            <p style="font-family: Cambria, serif;"> Lokasi &emsp;&emsp;&emsp;&emsp;&emsp; : &emsp;{{ $program->lokasi }}</p>
            <p style="font-family: Cambria, serif;"> Luas Area/Jalan &emsp;: &emsp;{{ $program->luas_area}}</p>
            <p style="font-family: Cambria, serif;"> Jumlah Anggaran &nbsp; : &emsp;{{ number_format($program->jumlah_anggaran, 0, ',', '.') }}</p>
            <p style="font-family: Cambria, serif;">Keterangan &emsp;&emsp;&emsp;:  &emsp;{!! $program->keterangan !!}</p>
            
            <a href="/programdarwis" class="d-block mt-3">Kembali</a>
        </div>
        <div class="col-md-3 py-5">
        </div>
    </div>
</main>
@endsection