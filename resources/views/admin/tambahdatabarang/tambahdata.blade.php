@extends('layouts.app')
@section('title', 'data produk')

@section('content')
    <div class="tambahdataproduk">
        <div class="container">
            <h2>Tambah Data Barang</h2>
            <form action="{{route('tambahdatabarangsubmit')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group label-select-container">
                    <label for="kategori">Kategori:</label>
                    <select id="kategori" name="kategori">
                        @foreach ($data['kategori'] as $item)
                            <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" id="nama_barang" name="nama_barang" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" id="harga" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="number" id="stok" name="stok" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*" required>
                </div>
                <div class="form-group">
                    <button type="submit">Tambah Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection
