@extends('layout')

@section('content')
<h1>Data Produk</h1>
    <hr>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>

    @if(session('sukses'))
    <div class="alert alert-success">
      {{ session('sukses') }}
    </div>
    @endif

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produk as $index => $data)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $data->nama }}</td>
          <td>Rp {{ $data->harga }}</td>
          <td>{{ $data->stok }}</td>
          <td>
            <a href="{{ route('produk.show', ['produk' => $data->id]) }}" class="btn btn-primary btn-sm">Lihat</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection