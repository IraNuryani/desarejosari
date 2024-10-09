@extends('layouts.main')

@section('container')
  <main>
    <div class="row w3-serif">
      <div class="col-md-2 py-3"></div>
      <div class="col-md-8 py-3 card shadow" style="background-color: #ffffff" data-aos="fade-up" data-aos-delay="100">
        <h3 class="w3-monospace text-center mb-2" >Program Pokdarwis</h3>
          <table class="table table-bordered w-100 d-block d-md-table">
            <thead>
              <tr>
                <th>No</th>
                <th>Program</th>
                <th>Status</th>z
                <th>Dimulai</th>
                <th>Selesai</th>
                <th>Jumlah Anggaran</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $item)
                  <tr class="border-b border-gray-200">
                      <td class="py-3 px-6 text-center">{{$key + 1}}</td>
                      <td class="py-3 px-6 text-center">{{$item->program}}</td>
                      <td class="py-3 px-6 text-center"><label class="label {{ $item->status == 'Rencana' ? 'bg-info text-light' : ($item->status == 'Sedang Berjalan' ? 'bg-warning text-dark' : 'bg-success text-light') }}">{{$item->status}}</label></td>
                      <td class="py-3 px-6 text-center">{{$item->dimulai}}</td>
                      <td class="py-3 px-6 text-center">{{$item->selesai}}</td>
                      <td class="py-3 px-6 text-center">{{number_format($item->jumlah_anggaran, 0, ',', '.')}}</td>
                      <td class="py-3 px-6 text-center"><a href="/detail/program/{{ $item->id }}"><i class="fa-solid fa-eye"></i></a>
                      </td>
                  </tr>
              @endforeach
          </tbody>
          </table>
      </div>
      <div class="col-md-2 py-3"></div>
    </div>
  </main>
</table>
@endsection