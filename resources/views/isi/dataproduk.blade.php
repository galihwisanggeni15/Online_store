@extends('layouts.app')
@section('title', 'data produk')
    
@section('content')
   
                {{-- sidebar --}}
                
        <div class="contentDP">
                <div class="grubatas">
                    <div class="mode">
                        <span class="mode-btn active" id="mode1" onclick="changeMode('mode1')" style="display: none;">
                            <i class="fas fa-bars"></i>
                        </span>
                        <span class="mode-btn" id="mode2" onclick="changeMode('mode2')">
                            <i class="fa-brands fa-windows"></i>
                        </span>
                    </div>

                    <div class="search">
                        <form>
                            <input type="text" placeholder="search" ></input>
                            <button>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="grubcard1" id="grubcard1" >
                    <div class="cardBarang">
                        <figure>
                            <img src="/img/earphone.jpeg" class="custom-image" />
                        </figure>
                        <h4>erphone apik pool</h4>
                        <div class="grub-kanan">
                            <span>
                                <i class="fas fa-plus-circle"></i>
                            </span>
                            <span class="edit">
                                <i class="fa-solid fa-pencil"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="grubcard2" id="grubcard2" style="display: none;">
                    <div class="cardBarang">
                        <div class="overlay">
                            <span class="edit">
                                <i class="fa-solid fa-pencil"></i>
                            </span>
                            <i class="fas fa-plus-circle"></i>
                            <p>Erpon Apik</p>
                        </div>
                        <figure>
                            <img src="/img/earphone.jpeg" alt="Deskripsi gambar" class="custom-image" />
                        </figure>
                    </div>
                    <div class="cardBarang"></div>
                    <div class="cardBarang"></div>
                    <div class="cardBarang"></div>
                    <div class="cardBarang"></div>
                    <div class="cardBarang"></div>
                </div>
            </div>



            <div class="keranjang" id="keranjang">
                <div class="btnkeranjang" onclick="bukakeranjang()">
                    <i id="thumbtackIcon" class="fa-solid fa-thumbtack"></i>
                </div>
                <div class="isikeranjang" id="isikeranjang">
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pensil</td>
                                <td class="grubjmlh">
                                    <button onclick="kurangiJumlah()">-</button>
                                    <div class="jmlh">1</div>
                                    <button onclick="tambahJumlah()">+</button>
                                </td>
                                <td>Rp 2.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="grubtotal" id="grubtotal">
                    <div class="total">
                        <p>total :</p>
                        <b>Rp 12.000.000</b>
                    </div>
                    <div class="grubhs">
                        <div class="hapus">
                            hapus
                        </div>
                        <div class="simpan">
                            simpan
                        </div>
                    </div>
                    <div class="bayar">
                        bayar
                    </div>
                </div>
            </div>

            <script>
                function tambahJumlah() {
                    var jumlahElement = document.querySelector('.jmlh');
                    var jumlah = parseInt(jumlahElement.textContent);
                    jumlahElement.textContent = jumlah + 1;
                }

                function kurangiJumlah() {
                    var jumlahElement = document.querySelector('.jmlh');
                    var jumlah = parseInt(jumlahElement.textContent);
                    if (jumlah > 1) {
                        jumlahElement.textContent = jumlah - 1;
                    }
                }

            </script>
@endsection