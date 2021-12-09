@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<h3>Data staff</h3>

	<a href="/staff"> Kembali</a>

	<br/>
	<br/>

	<form action="/tambahstaff/store" method="post">
		{{ csrf_field() }}
        StaffID <input type="text" required="required" name="staffID"> <br/>
		NamaDepan <input type="text" required="required" name="namaDepan"> <br/>
		NamaBelakang <input type="text" required="required" name="namaBelakang"> <br/>
        AsalDepartemen <input type="text" required="required" name="asalDepartemen"> <br/>
		KodeDivisi <input type="text" required="required" name="kodeDivisi"> <br/>
        NRP <input type="text" required="required" name="NRP"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
