@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Data anggota</h3>

	<a href="/anggota"> Kembali</a>

	<br/>
	<br/>

	<form action="/tambahanggota/store" method="post">
		{{ csrf_field() }}
		namaDepan <input type="text" required="required" name="namaDepan"> <br/>
		namaBelakang <input type="text" required="required" name="namaBelakang"> <br/>
		NRP <input type="text" required="required" name="NRP"> <br/>
		asalDepartemen <input type="text" required="required" name="asalDepartemen"> <br/>
        namaProker <input type="text" required="required" name="namaProker"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
