@extends('layouts.app')
@section('title', 'data produk')

@section('content')
    <div class="contentlap">
        <div class="laporan">
            <div class="judul">
                Laporan
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Nama Kasir</th>
                            <th>Jumlah Barang</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td>Nama Barang</td>
                            <td>Nama Kasir</td>
                            <td>120</td>
                            <td>Total Harga</td>
                            <td>Tanggal</td>
                            <td>
                                <a href="#"><div class="hapus">Hapus</div></a>
                            </td>
                        </tr>   
                        <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                        <?php
                        // Data yang sama untuk setiap baris
                        $nama_barang = "Barang A";
                        $nama_kasir = "Kasir 1";
                        $jumlah_barang = 500;
                        $total_harga = 500000;
                        $tanggal = "2022-03-01";
                
                        // Jumlah baris yang ingin dibuat
                        $jumlah_baris = 100;
                
                        // Perulangan untuk membuat baris
                        for ($i = 0; $i < $jumlah_baris; $i++) {
                            echo "<tr>";
                            echo "<td>$nama_barang</td>";
                            echo "<td>$nama_kasir</td>";
                            echo "<td>$jumlah_barang</td>";
                            echo "<td>$total_harga</td>";
                            echo "<td>$tanggal</td>";
                            echo '<td>
                                    <a href="#"><div class="hapus">Hapus</div></a>
                                  </td>';
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection