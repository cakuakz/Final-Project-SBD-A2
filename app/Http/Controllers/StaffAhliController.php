<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffAhliController extends Controller
{
    public function tabelStaffAhli() {

        $staffahli = DB::table('staffahli')->get();

        return view('tabel.staffahli',['staffahli' => $staffahli]);

    }

    public function tambahStaffAhli()
    {

	// memanggil view tambah
	return view('tambah.tambahstaffahli');

    }

    public function storeStaffAhli(Request $request)
    {
	DB::table('staffahli')->insert([
        'staffAhliID' => $request->staffAhliID,
        'namaDepan' => $request->namaDepan,
		'namaBelakang' => $request->namaBelakang,
		'asalDepartemen' => $request->asalDepartemen,
        'kodeDivisi' => $request->kodeDivisi,
        'NRP' => $request->NRP
	]);

	return redirect('/staffahli');
    }

    public function editStaffAhli($id)
    {
	$staffahli = DB::table('staffahli')->where('staffAhliID',$id)->get();
    return view('edit.editstaffahli',['staffahli' => $staffahli]);

    }

    public function updateStaffAhli(Request $request)
    {
        // dd($request);
	DB::table('staffahli')->where('staffAhliID',$request->id)->update([
		'namaDepan' => $request->namaDepan,
		'namaBelakang' => $request->namaBelakang,
		'asalDepartemen' => $request->asalDepartemen,
        'kodeDivisi' => $request->kodeDivisi,
        'NRP' => $request->NRP
	]);
	return redirect('/staffahli');
    }

    public function hapusStaffAhli($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('staffahli')->where('staffAhliID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/staffahli');
    }
}
