@extends('layout')

@section('content')
<section id="tambahProduk">
  <h1>Tambah Produk</h1>
  <form action="{{ route('produk.store') }}" method="post">
    @csrf
    <div>
      <label>Nama Produk</label>
      <input type="text" name="nama" class="@error('nama') invalid @enderror" value="{{ old('nama') }}">
      @error('nama')
      <p class="error-msg">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label>Stok Produk</label>
      <input type="number" name="stok" class="@error('stok') invalid @enderror" value="{{ old('stok') }}">
      @error('stok')
      <p class="error-msg">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label>Harga Produk</label>
      <input type="number" name="harga" class="@error('harga') invalid @enderror" value="{{ old('harga') }}">
      @error('harga')
      <p class="error-msg">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label>Deskripsi Produk</label>
      <textarea cols="30" rows="10" name="deskripsi" class="@error('deskripsi') invalid @enderror">{{ old('deskripsi') }}</textarea>
      @error('deskripsi')
      <p class="error-msg">{{ $message }}</p>
      @enderror
    </div>
    <button class="btn btn-primary">Simpan</button>
  </form>
</section>
@endsection