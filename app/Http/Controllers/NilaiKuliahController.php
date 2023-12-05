<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{

	public function DB()
    {
    	// mengambil data dari table pegawai
    	$nilai = DB::table('nilaikuliah')->get();
		foreach($nilai as $n){
            switch(true){
                case($n->NilaiAngka >= 81):
                $n->NilaiHuruf = 'A';
                break;
                case($n->NilaiAngka >= 61):
                $n->NilaiHuruf = 'B';
                break;
                case($n->NilaiAngka >= 41):
                $n->NilaiHuruf = 'C';
                break;
                default:
                $n->NilaiHuruf = 'D';
                break;
            }
        $n->Bobot = $n->NilaiAngka * $n->SKS;
        }
    	// mengirim data pegawai ke view index
    	return view('ETS/indexnilai',['nilai' => $nilai]);

    }

	public function tambah()
{

	// memanggil view tambah
	return view('ETS/tambahdata');

}

public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'nrp' => $request->nrp,
		'nilaiangka' => $request->nilai,
		'sks' => $request->sks,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilai');

}


}




