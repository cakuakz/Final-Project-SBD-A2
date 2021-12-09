<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/divisi', 'HomeController@tabelDivisi');

Route::get('/home/dashboard', 'HomeController@totalTabel');

Route::get('/proker', 'ProkerController@tabelProker');

Route::get('/anggota', 'AnggotaController@tabelAnggota');

Route::get('/staff', 'StaffController@tabelStaff');

Route::get('/staffahli', 'StaffAhliController@tabelStaffAhli');

Route::get('/tambahdivisi','HomeController@tambahDivisi');
Route::post('/tambahdivisi/store','HomeController@storeDivisi');

Route::get('/tambahanggota','AnggotaController@tambahAnggota');
Route::post('/tambahanggota/store','AnggotaController@storeAnggota');

Route::get('/tambahstaff','StaffController@tambahStaff');
Route::post('/tambahstaff/store','StaffController@storeStaff');

Route::get('/tambahproker','ProkerController@tambahProker');
Route::post('/tambahproker/store','ProkerController@storeProker');

Route::get('/tambahstaffahli','StaffAhliController@tambahStaffAhli');
Route::post('/tambahstaffahli/store','StaffAhliController@storeStaffAhli');

Route::get('/editdivisi/{id}','HomeController@editDivisi');
Route::post('/updatedivisi','HomeController@updateDivisi');

Route::get('/editproker/{id}','ProkerController@editProker');
Route::post('/updateproker','ProkerController@updateProker');

Route::get('/editstaff/{id}','StaffController@editStaff');
Route::post('/updatestaff','StaffController@updateStaff');

Route::get('/editanggota/{id}','AnggotaController@editAnggota');
Route::post('/updateanggota','AnggotaController@updateAnggota');

Route::get('/editstaffahli/{id}','StaffAhliController@editStaffAhli');
Route::post('/updatestaffahli','StaffAhliController@updateStaffAhli');

Route::get('/hapusdivisi/{id}','HomeController@hapusDivisi');
Route::get('/hapusproker/{id}','ProkerController@hapusProker');
Route::get('/hapusstaff/{id}','StaffController@hapusStaff');
Route::get('/hapusanggota/{id}','AnggotaController@hapusAnggota');
Route::get('/hapusstaffahli/{id}','StaffAhliController@hapusStaffAhli');

