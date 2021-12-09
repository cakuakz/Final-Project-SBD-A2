<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProkerController extends Controller
{
    public function tabelProker() {

        $Proker = DB::table('Proker')->get();
        $statusProker = DB::table('statusproker')->get();

        return view('tabel.proker',[
            'Proker' => $Proker,
            'statusProker' => $statusProker
        ]);

    }

    public function tambahProker()
    {

	// memanggil view tambah
	return view('tambah.tambahproker');

    }

    public function storeProker(Request $request)
    {

	DB::table('Proker')->insert([
        'namaProker' => $request->namaProker,
        'kodeDivisi' => $request->kodeDivisi,
		'tempatProker' => $request->tempatProker,
        'tanggalProker' => $request->tanggalProker
	]);

	return redirect('/proker');

    }

    public function editProker($id)
    {
	$Proker = DB::table('Proker')->where('prokerID',$id)->get();
    return view('edit.editproker',['Proker' => $Proker]);

    }

    public function updateProker(Request $request)
    {
	DB::table('Proker')->where('prokerID',$request->prokerID)->update([
		'namaProker' => $request->namaProker,
		'kodeDivisi' => $request->kodeDivisi,
        'tempatProker' => $request->tempatProker,
        'tanggalProker' => $request->tanggalProker
	]);

	return redirect('/proker');
    }

    public function hapusProker($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('Proker')->where('prokerID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/proker');
    }
}
