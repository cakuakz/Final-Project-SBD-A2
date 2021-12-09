@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit anggota</h3>

	<a href="/anggota"> Kembali</a>

	<br/>
	<br/>

	@foreach($Anggota as $a)
	<form action="/updateanggota" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->noAnggota }}"> <br/>
		namaDepan <input type="text" required="required" name="namaDepan" value="{{ $a->namaDepan }}"> <br/>
		namaBelakang <input type="text" required="required" name="namaBelakang" value="{{ $a->namaBelakang }}"> <br/>
		NRP <input type="text" required="required" name="NRP" value="{{ $a->NRP }}"> <br/>
		asalDepartemen <input type="text" required="required" name="asalDepartemen" value="{{ $a->asalDepartemen }}"> <br/>
        namaProker <input type="text" required="required" name="namaProker" value="{{ $a->namaProker }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
