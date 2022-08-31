@extends('layout')

@section('content')
<section id="detailProduk">
  <h1>Detail Produk</h1>
  <p><strong>Nama Produk: </strong> {{ $produk->nama }}</p>
  <p><strong>Stok Produk: </strong> {{ $produk->stok }}</p>
  <p><strong>Harga Produk: </strong> {{ $produk->harga }}</p>
  <p style="margin-bottom: 20px;"><strong>Deskripsi Produk: </strong> {{ $produk->deskripsi }}</p>
  <a class="btn btn-warning" href="{{ route('produk.edit', ['produk' => $produk->id]) }}">Edit</a>
  <form action="{{ route('produk.destroy', ['produk' => $produk->id]) }}" method="post" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Yakin mau menghapus?')" class="btn btn-danger">Hapus</button>
  </form>
</section>
@endsection