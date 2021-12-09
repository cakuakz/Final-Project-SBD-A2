<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function tabelAnggota() {

        $Anggota = DB::table('Anggota')->get();

        return view('tabel.anggota',['Anggota' => $Anggota]);

    }

    public function tambahAnggota()
    {

	// memanggil view tambah
	return view('tambah.tambahanggota');

    }

    public function storeAnggota(Request $request)
    {
	// insert data ke table pegawai
	DB::table('Anggota')->insert([
		'noAnggota' => $request->noAnggota,
        'namaDepan' => $request->namaDepan,
		'namaBelakang' => $request->namaBelakang,
		'NRP' => $request->NRP,
		'asalDepartemen' => $request->asalDepartemen,
        'namaProker' => $request->namaProker
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/anggota');

    }

    public function editAnggota($id)
    {
	$Anggota = DB::table('Anggota')->where('noAnggota',$id)->get();
    return view('edit.editanggota',['Anggota' => $Anggota]);

    }

    public function updateAnggota(Request $request)
    {
	DB::table('Anggota')->where('noAnggota',$request->id)->update([
		'namaDepan' => $request->namaDepan,
		'namaBelakang' => $request->namaBelakang,
		'NRP' => $request->NRP,
		'asalDepartemen' => $request->asalDepartemen,
        'namaProker' => $request->namaProker
	]);
	return redirect('/anggota');
    }

    public function hapusAnggota($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('Anggota')->where('noAnggota',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/anggota');
    }
}
