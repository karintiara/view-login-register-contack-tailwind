@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
<h1 class="text-3xl font-bold mb-4">Contact Page</h1>
<table class="table-auto w-full bg-white shadow-md rounded mb-4">
  <thead>
    <tr>
      <th class="px-4 py-2">NIM</th>
      <th class="px-4 py-2">Nama</th>
      <th class="px-4 py-2">Prodi</th>
      <th class="px-4 py-2">Email</th>
    </tr>
  </thead>
  <tbody>
    @for ($i = 1; $i <= 10; $i++)
      <tr>
        <td class="border px-4 py-2">NIM{{ $i }}</td>
        <td class="border px-4 py-2">Nama {{ $i }}</td>
        <td class="border px-4 py-2">Prodi {{ $i }}</td>
        <td class="border px-4 py-2">email{{ $i }}@example.com</td>
      </tr>
    @endfor
  </tbody>
</table>
@endsection
