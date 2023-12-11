<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get(); //ini kalo ga pake paginate
        $karyawan = DB::table('karyawan')->get();
    	// mengirim data pegawai ke view index
		return view('EAS/index',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('EAS/tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
{
    // validasi input
    $request->validate([
        'kodepegawai' => 'required|unique:karyawan,kodepegawai|max:255',
        'namalengkap' => 'required',
        'divisi' => 'required',
        'departemen' => 'required',
    ], [
        'kodepegawai.unique' => 'Kode Pegawai sudah ada.',
    ]);

    // insert data ke table karyawan
    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => strtoupper($request->namalengkap), // Namalengkap dalam huruf kapital
        'divisi' => $request->divisi,
        'departemen' => strtolower($request->departemen), // Departemen dalam huruf kecil
    ]);

    // alihkan halaman ke halaman karyawan
    return redirect('/karyawan');
}

	// method untuk hapus data pegawai
	public function hapus($kodepegawai)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

}
