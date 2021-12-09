@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Data proker</h3>

	<a href="/proker"> Kembali</a>

	<br/>
	<br/>

	<form action="/tambahproker/store" method="post">
		{{ csrf_field() }}
		namaProker <input type="text" required="required" name="namaProker"> <br/>
		kodeDivisi <input type="text" required="required" name="kodeDivisi"> <br/>
		tempatProker <input type="text" required="required" name="tempatProker"> <br/>
        tanggalProker <input type="date" required="required" name="tanggalProker"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
