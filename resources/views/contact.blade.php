@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
<div class="relative flex flex-col justify-center h-full overflow-hidden">
    <div class="w-full p-6 m-auto bg-gray-800 rounded-md shadow-lg ring-2 ring-white/50">
      <h1 class="text-3xl font-semibold text-white">HALAMAN KONTAK</h1>
      <br>
      <table class="table-auto w-full bg-white shadow-md rounded mb-4">
        <thead>
          <tr>
            <th class="px-4 py-2 text-gray-800">NIM</th>
            <th class="px-4 py-2 text-gray-800">Nama</th>
            <th class="px-4 py-2 text-gray-800">Prodi</th>
            <th class="px-4 py-2 text-gray-800">Email</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 1; $i <= 10; $i++)
            <tr class="hover:bg-gray-200">
              <td class="border px-4 py-2 text-gray-800">23241010200{{ $i }}</td>
              <td class="border px-4 py-2 text-gray-800">Karin Tiara {{ $i }}</td>
              <td class="border px-4 py-2 text-gray-800">Teknologi Informasi</td>
              <td class="border px-4 py-2 text-gray-800">23241010200{{ $i }}@unej.ac.id</td>
            </tr>
          @endfor
        </tbody>
      </table>
@endsection
