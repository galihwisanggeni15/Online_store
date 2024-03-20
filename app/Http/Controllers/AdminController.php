<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    // LOGIN
    public function login()
    {
        return view('login.login');
    }
    public function loginsubmit(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Mengambil data pengguna dari model
        $user = AdminModel::GetDataById('user', 'username', $validatedData['username']);

        // Jika pengguna tidak ditemukan, kembalikan pesan error
        if (!$user) {
            return redirect()->back()->withErrors(['username' => 'Username tidak ditemukan'])->withInput();
        }

        // Memeriksa apakah password cocok
        if (!password_verify($validatedData['password'], $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Password salah'])->withInput();
        }

        // Menyimpan informasi login di sesi pengguna
        session(['user' => $user]);
        // session(['id_role' => $user->id_role]);

        // Mengirimkan pesan flash session
        return redirect()->route('dashboard')->with('success', 'Login berhasil. Selamat datang di dashboard!');
    }



    // DASHBOARD
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // public function pembayarann()
    // {
    //     return view('admin.pembayaran');
    // }

    // DATABARANG
    public function databarang()
    {
        // $data = AdminModel::GetData('data_barang');

        // // Ambil stok barang dari database
        // $stok_barang = [];
        // foreach ($data as $item) {
        //     $stok_barang[$item->id_barang] = $item->stok; // Anda perlu sesuaikan dengan nama kolom stok barang di tabel
        // }

        // return view('admin.barang', compact('data', 'stok_barang'));
        return view('admin.databarang');
    }
    public function listbarang($id)
    {
        // Mencari barang berdasarkan ID
        // $barang = AdminModel::GetDataById('data_barang', 'id_barang', $id);

        // if (!$barang) {
        //     return response()->json(['error' => 'Barang not found'], 404);
        // }

        // // Menyiapkan data barang dalam bentuk array
        // $data = [
        //     'id_barang' => $barang->id_barang,
        //     'nama_barang' => $barang->nama_barang,
        // ];

        // return response()->json(['data' => $data], 200);
    }
    public function tambahdatabarang()
    {
        $data['kategori'] = AdminModel::GetData('data_kategori');
        return view('admin.tambahdatabarang.tambahdata', compact('data'));
    }
    public function tambahdatabarangsubmit(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Adjust max file size as needed
        ]);

        // Check if the product with the same name already exists
        $existingProduct = AdminModel::GetDataByColumn('data_barang', 'nama_barang', $request->nama_barang);
        if ($existingProduct) {
            return back()->with('error', 'Product with the same name already exists.');
        }

        $uploadPath = public_path('upload');
        if (!File::isDirectory($uploadPath)) {
            File::makeDirectory($uploadPath, 0777, true, true);
        }

        $image = $request->file('gambar');
        $imageName = $image->hashName();
        $image->move($uploadPath, $imageName);

        // Save product details to the database
        $data = [
            'id_kategori' => $request->kategori,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $imageName,
            'created_at' => Carbon::now('Asia/Jakarta')
        ];
        AdminModel::CreateData('data_barang', $data);

        return redirect()->route('databarang')->with('success', 'Product added successfully.');
    }



    // PEMBAYARAN
    public function pembayaran(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'jumlah_barang' => 'required|array',
        //     'jumlah_barang.*' => 'required|integer|min:1',
        // ]);

        // // Jika validasi gagal, kembalikan pesan kesalahan
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // // Memasukkan data nama_barang dan jumlah_barang ke dalam array
        // $data = [];
        // $totalHarga = 0; // Inisialisasi total harga

        // foreach ($request->jumlah_barang as $id_barang => $jumlahBarang) {
        //     $barang = AdminModel::GetDataById('data_barang', 'id_barang', $id_barang);

        //     if ($barang) {
        //         $totalBarang = $jumlahBarang * $barang->harga;
        //         $totalHarga += $totalBarang; // Menambahkan harga barang ke total harga

        //         $data[] = [
        //             'id_barang' => $id_barang,
        //             'nama_barang' => $barang->nama_barang,
        //             'jumlah_barang' => $jumlahBarang,
        //             'total' => $totalBarang
        //         ];
        //     }
        // }

        // return view('admin.pembayaran', compact('data', 'totalHarga')); // Mengirimkan total harga ke tampilan
    }
    public function bayar(Request $request)
    {
        // $id_user = session('user')->id_user;
        // $validatedData = [];

        // foreach ($request->id_barang as $key => $id_barang) {
        //     $total_harga = $request->total[$key];
        //     $jumlah_barang = $request->jumlah_barang[$key];

        //     // Retrieve the item from the database
        //     $barang = AdminModel::GetDataById('data_barang', 'id_barang', $id_barang);

        //     // Ensure the item exists
        //     if ($barang) {
        //         // Check if there's enough stock available
        //         if ($barang->stok >= $jumlah_barang) {
        //             // Calculate the new stock quantity
        //             $new_stock = $barang->stok - $jumlah_barang;

        //             // Update the stock quantity in the database
        //             AdminModel::updateData('data_barang', 'id_barang', $id_barang, ['stok' => $new_stock]);


        //             // Add the payment data to the validated data array
        //             $validatedData[] = [
        //                 'total_harga' => $total_harga,
        //                 'id_barang' => $id_barang,
        //                 'jumlah_barang' => $jumlah_barang,
        //                 'id_user' => $id_user,
        //                 'created_at' => Carbon::now('Asia/Jakarta')
        //             ];
        //         } else {
        //             // Handle insufficient stock (optional)
        //             // For example, return an error message or redirect back with an error
        //             return redirect()->back()->with('error', 'Insufficient stock for item: ' . $barang->nama_barang);
        //         }
        //     }
        // }
        // // Save the payment data to the database
        // AdminModel::CreateData('data_pembayaran', $validatedData);

        // // Redirect to the desired page
        // return redirect()->route('databarang');
    }



    // DATAKATEGORI
    public function datakategori()
    {
        return view('admin.kategori');
    }



    // LAPORAN
    public function laporan(Request $request)
    {
        return view('admin.laporan');
    }
}
