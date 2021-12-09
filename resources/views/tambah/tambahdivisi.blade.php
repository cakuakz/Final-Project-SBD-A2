@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<h3>Data divisi</h3>

	<a href="/divisi"> Kembali</a>

	<br/>
	<br/>

	<form action="/tambahdivisi/store" method="post">
		{{ csrf_field() }}
		kodeDivisi <input type="text" required="required" name="kodeDivisi"> <br/>
		namaDivisi <input type="text" required="required" name="namaDivisi"> <br/>
		ketuaDivisi <input type="text" required="required" name="ketuaDivisi"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
