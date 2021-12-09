<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function tabelDivisi() {

        $Divisi = DB::table('Divisi')->get();

        return view('tabel.divisi',['Divisi' => $Divisi]);

    }

    public function tambahDivisi() {

        return view('tambah.tambahdivisi');
    }

    public function storeDivisi(Request $request)
    {
	// insert data ke table pegawai
	DB::table('Divisi')->insert([
		'kodeDivisi' => $request->kodeDivisi,
		'namaDivisi' => $request->namaDivisi,
		'ketuaDivisi' => $request->ketuaDivisi
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/divisi');

    }


    public function editDivisi($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$Divisi = DB::table('Divisi')->where('kodeDivisi',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit.editdivisi',['Divisi' => $Divisi]);

    }

    public function updateDivisi(Request $request)
    {
	// update data pegawai
	DB::table('Divisi')->where('kodeDivisi',$request->id)->update([
		'namaDivisi' => $request->namaDivisi,
		'ketuaDivisi' => $request->ketuaDivisi
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/divisi');
    }

    public function hapusDivisi($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('Divisi')->where('kodeDivisi',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/divisi');
    }



    public function totalTabel() {
        $prokerCount = DB::table('Proker')->count();
        $divisiCount = DB::table('Divisi')->count();
        $staffCount = DB::table('Staff')->count();
        $staffAhliCount = DB::table('StaffAhli')->count();
        $anggotaCount = DB::table('Anggota')->count();

        return view('dashboard', [
            'prokerCount' => $prokerCount,
            'divisiCount' => $divisiCount,
            'staffCount' => $staffCount,
            'staffAhliCount' => $staffAhliCount,
            'anggotaCount' => $anggotaCount
        ]);
    }
}
