<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }
    public function databarang()
    {
        $data = AdminModel::GetData('data_barang');
        return view('admin.databarang', compact('data'));
    }
    public function pembayaran()
    {
        return view('admin.pembayaran');
    }
    public function datakategori()
    {
        return view('admin.kategori');
    }
    public function laporan()
    {
        return view('admin.laporan');
    }




    public function listbarang($id)
    {
        // Mencari barang berdasarkan ID
        $barang = AdminModel::GetDataById('data_barang', 'id_barang', $id);

        if (!$barang) {
            return response()->json(['error' => 'Barang not found'], 404);
        }

        // Menyiapkan data barang dalam bentuk array
        $data = [
            'id_barang' => $barang->id_barang,
            'nama_barang' => $barang->nama_barang,
        ];

        return response()->json(['data' => $data], 200);
    }
}
