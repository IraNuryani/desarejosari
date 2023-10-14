@extends('layouts.main')

@section('container')
  <h1>Halaman Pengelolaan Program Pokdarwis</h1>
  <table class="table caption-top">
    <caption>List of users</caption>
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
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
  {{-- <table class="w-full table-auto border mt-3">
    <thead class="border-b">
        <tr>
            <th class="text-sm text-left font-medium text-gray-900 px-6 py-4">NO</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4">Program</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4">Status</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4">Tahun</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4">Detail</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>pembangunan Jalan</td>
        <td>On Progres</td>
        <td>2023</td>
        <td>edit</td>
      </tr>
    </tbody> --}}
    {{-- <tbody>
        @foreach ($post as $item)
            <tr>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-left">
                    {{ $item->id }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    {{ $item->judul }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    {{ $item->deskripsi }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    {{ $item->created_at }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    {{ $item->updated_at }}
                </td>
            </tr>
        @endforeach
    </tbody> --}}
</table>
@endsection