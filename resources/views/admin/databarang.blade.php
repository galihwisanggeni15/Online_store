@extends('layout.app')
@section('title', 'Data Barang')
@section('content')
    <div class="container mt-3">
        <table id="data-barang" class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama_barang }}</td>
                        <td><a href="#" class="btn-tambah" onclick="listbarang({{ $item->id_barang }})">Tambah</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card p-2">
            <table id="barang-added" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be dynamically added here -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
         function listbarang(id_barang) {
        // Mendapatkan data barang berdasarkan ID
        $.ajax({
            url: '/listbarang/' + id_barang, // Ganti dengan URL yang sesuai
            type: 'GET',
            success: function(response) {
                var data = response.data; // Mendapatkan data barang dari respons

                // Membuat baris baru di dalam tabel
                var newRow = "<tr>" +
                    "<td>" + data.id_barang + "</td>" +
                    "<td>" + data.nama_barang + "</td>" +
                    "<td><input type='number' class='form-control' id='total_barang_" + data.id_barang + "'></td>" +
                    "<td><a href='#' class='btn-hapus' onclick='hapusBarang(" + data.id_barang + ")'>Hapus</a></td>" +
                    "</tr>";

                // Menambahkan baris baru ke dalam tabel
                $('#barang-added tbody').append(newRow);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    </script>
@endsection
