<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get(); //ini kalo ga pake paginate
        $sepeda = DB::table('sepeda')
                    ->orderBy('merksepeda', 'asc')
                    ->paginate(10); //kalo pake paginate
    	// mengirim data pegawai ke view index
		return view('TugasPraUAS/index',['sepeda' => $sepeda]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('TugasPraUAS/tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sepeda')->insert([
			'merksepeda' => $request->merksepeda,
			'stocksepeda' => $request->stocksepeda,
			'tersedia' => $request->stocksepeda > 0 ? '1' : '0'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepeda');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepeda = DB::table('sepeda')->where('kodesepeda',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('TugasPraUAS/edit',['sepeda' => $sepeda]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('sepeda')->where('kodesepeda',$request->id)->update([
			'merksepeda' => $request->merksepeda,
			'stocksepeda' => $request->stocksepeda,
			'tersedia' => $request->stocksepeda > 0 ? '1' : '0'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepeda');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sepeda')->where('kodesepeda',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepeda');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepeda = DB::table('sepeda')
		->where('merksepeda','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('TugasPraUAS/index',['sepeda' => $sepeda, 'cari' => $cari]);
	}

    public function view($id)
    {
	    // mengambil data pegawai berdasarkan id yang dipilih
	    $sepeda = DB::table('sepeda')->where('kodesepeda',$id)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('TugasPraUAS/view',['sepeda' => $sepeda]);
    }

}
