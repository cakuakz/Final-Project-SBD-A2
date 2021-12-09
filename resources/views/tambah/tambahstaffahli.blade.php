@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Data staffahli</h3>

	<a href="/staffahli"> Kembali</a>

	<br/>
	<br/>

	<form action="/tambahstaffahli/store" method="post">
		{{ csrf_field() }}
        staffAhliID <input type="text" required="required" name="staffAhliID"> <br/>
		namaDepan <input type="text" required="required" name="namaDepan"> <br/>
		namaBelakang <input type="text" required="required" name="namaBelakang"> <br/>
        asalDepartemen <input type="text" required="required" name="asalDepartemen"> <br/>
		kodeDivisi <input type="text" required="required" name="kodeDivisi"> <br/>
        NRP <input type="text" required="required" name="NRP"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
