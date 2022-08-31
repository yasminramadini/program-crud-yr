@extends('layout')

@section('content')
<section id="tambahProduk">
  <h1>Edit Produk</h1>
  <form action="{{ route('produk.update', ['produk' => $produk->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div>
      <label>Nama Produk</label>
      <input type="text" name="nama" class="@error('nama') invalid @enderror" value="{{ $produk->nama }}">
      @error('nama')
      <p class="error-msg">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label>Stok Produk</label>
      <input type="number" name="stok" class="@error('stok') invalid @enderror" value="{{ $produk->stok }}">
      @error('stok')
      <p class="error-msg">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label>Harga Produk</label>
      <input type="number" name="harga" class="@error('harga') invalid @enderror" value="{{ $produk->harga }}">
      @error('harga')
      <p class="error-msg">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label>Deskripsi Produk</label>
      <textarea cols="30" rows="10" name="deskripsi" class="@error('deskripsi') invalid @enderror">{{ $produk->deskripsi }}</textarea>
      @error('deskripsi')
      <p class="error-msg">{{ $message }}</p>
      @enderror
    </div>
    <button class="btn btn-primary">Perbarui</button>
  </form>
</section>
@endsection