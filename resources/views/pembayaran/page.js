import Page from "@/app/page";
import styles from "../../public/css/pembayaran.css";
import Sidbar from "../header/page";
import Navbar from "../navbar/page";

const Pembayaran = () => {
    return (
        <main className="main">
            <Navbar />
            <div className="containerPembayaran">
                    <Sidbar />
                    {/* <Page/> */}
                <div className="contentPembayaran">
                    <div className="cardPembayaran">
                        <div className="judulPembayaran">
                            Pembayaran
                        </div>
                        <div className="isiPembayaran">
                            <div className="cardIsi">
                                <div className="right">
                                    Tanggal    
                                </div>
                                <div className="left">
                                    26 mei 2026 
                                </div>
                            </div>
                            <div className="tabelbayar">
                                <table>
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Kasir</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div className="cardtotal">
                                <form > 
                                    <label for="total">Total Semua :</label>
                                    <input type="number" name="bayar" id="bayar" disabled />
                                </form>
                            </div>
                            <div className="cardbayar">
                                <form method="" action="">
                                    <label for="bayar">Bayar</label>
                                    <input type="number" name="bayar" id="bayar" disabled />
                                    <button className="btnBayar" type="submit">
                                    <i class="fa-solid fa-coins"></i>
                                        Bayar
                                    </button>
                                </form>
                            </div>
                            <div className="cardKembali">
                                <form method="" action="">
                                    <label for="kembali">Kembalian :</label>
                                    <input type="number" name="bayar" id="bayar" disabled />
                                </form>
                            </div>
                            <div className="cardcetak">
                            <i class="fa-solid fa-cash-register"></i>
                                Cetak Bukti Pembayaran
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    );
};

export default Pembayaran;