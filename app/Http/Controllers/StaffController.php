<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function tabelStaff() {

        $Staff = DB::table('Staff')->get();

        return view('tabel.staff',['Staff' => $Staff]);

    }

    public function tambahStaff()
    {

	// memanggil view tambah
	return view('tambah.tambahstaff');

    }

    public function storeStaff(Request $request)
    {
	// insert data ke table pegawai
	DB::table('Staff')->insert([
        'staffID' => $request->staffID,
        'namaDepan' => $request->namaDepan,
		'namaBelakang' => $request->namaBelakang,
		'asalDepartemen' => $request->asalDepartemen,
        'kodeDivisi' => $request->kodeDivisi,
        'NRP' => $request->NRP
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/staff');

    }

    public function editStaff($id)
    {
	$Staff = DB::table('Staff')->where('staffID',$id)->get();
    return view('edit.editstaff',['Staff' => $Staff]);

    }

    public function updateStaff(Request $request)
    {
        // dd($request);
	DB::table('Staff')->where('staffID',$request->id)->update([
		'namaDepan' => $request->namaDepan,
		'namaBelakang' => $request->namaBelakang,
		'asalDepartemen' => $request->asalDepartemen,
        'kodeDivisi' => $request->kodeDivisi,
        'NRP' => $request->NRP
	]);
	return redirect('/staff');
    }

    public function hapusStaff($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('Staff')->where('staffID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/staff');
    }
}
