"use client";
import styles from "../../public/css/dataproduk.css";
import Image from 'next/image';
import Sidbar from "../header/page";
import Navbar from "../navbar/page";
import React, {useState} from "react";


const DataProduk = () => {
    const [isSidbarOpen, setIsSidebarOpen] = useState(false);

    const bukakeranjang = () => {
        setIsSidebarOpen(!isSidbarOpen);
    };

    // kalkulator tambah kurang barang
    const [jumlah, setJumlah] = useState(0);

    const tambahJumlah = () => {
        setJumlah(jumlah + 1);
    };

    const kurangiJumlah = () => {
        if (jumlah > 0) {
            setJumlah(jumlah - 1);
        }
    };

    // ganti mode
    const [activeMode, setActiveMode] = useState('ganti 1');

    const handleClick = (mode) => {
        setActiveMode(mode);
    };

    return (
        <main className="main">
            <Navbar />
            <div className="containerDP">
                <Sidbar />
                <div className="contentDP">
                    <div className="grubatas">
                        <div className="mode">
                            {activeMode === 'ganti 1' && (
                                <span className="active"  onClick={() => handleClick('ganti 2')}><i className="fas fa-bars"></i></span>
                            )}
                            {activeMode === 'ganti 2' && (
                                <span className="active"  onClick={() => handleClick('ganti 1')}><i class="fa-brands fa-windows"></i></span>
                            )}
                        </div>
                        <div className="search">
                            <form>
                                <input type="text" placeholder="search" ></input>
                                <button>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    {activeMode  === 'ganti 1' && (
                    <div className="grubcard1">
                        <div className="cardBarang">
                            <figure>
                                <img src="/img/earphone.jpeg" alt="Deskripsi gambar" className="custom-image" />
                            </figure>
                            <h4>erphone apik pool</h4>
                            <span>
                                <i class="fas fa-plus-circle"></i>
                            </span>
                        </div>
                    </div>
                    )}
                    {activeMode  === 'ganti 2' && (
                    <div className="grubcard2">
                        <div className="cardBarang">
                            <div className="overlay">
                                <i class="fas fa-plus-circle"></i>
                                <p>Erpon Apik</p>
                            </div>
                            <figure>
                                <img src="/img/earphone.jpeg" alt="Deskripsi gambar" className="custom-image" />
                            </figure>
                        </div>
                        <div className="cardBarang"></div>
                        <div className="cardBarang"></div>
                        <div className="cardBarang"></div>
                        <div className="cardBarang"></div>
                        <div className="cardBarang"></div>
                    </div>
                    )}
                </div>



                <div className={`keranjang ${isSidbarOpen ? "open" : ""}`}>
                    <div className="btnkeranjang" onClick={bukakeranjang}>
                        {/* <i class="fa-solid fa-thumbtack"></i> */}
                        <i class={`fa-solid fa-thumbtack ${isSidbarOpen ? "open" : ""}`}></i>
                    </div>
                    <div className="isikeranjang">
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
                                    <td className="grubjmlh">
                                        <button onClick={kurangiJumlah}>-</button>
                                        <div className="jmlh">{jumlah}</div>
                                        <button onClick={tambahJumlah}>+</button>
                                    </td>
                                    <td>Rp 2.000.000</td>
                                </tr>
                                <tr>
                                    <td>Buku</td>
                                    <td>5</td>
                                    <td>$10</td>
                                </tr>
                                <tr>
                                    <td>Penghapus</td>
                                    <td>3</td>
                                    <td>$2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div className={`grubtotal ${isSidbarOpen ? "open" : ""}`}>
                        <div className="total">
                            <p>total :</p>
                            <b>Rp 12.000.000</b>
                        </div>
                        <div className="grubhs">
                            <div className="hapus">
                                hapus
                            </div>
                            <div className="simpan">
                                simpan
                            </div>
                        </div>
                        <div className="bayar">
                            bayar
                        </div>
                    </div>
                </div>
            </div>
        </main>

    );
};

export default DataProduk;