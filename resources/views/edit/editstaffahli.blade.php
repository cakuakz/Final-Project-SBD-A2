@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit staffahli</h3>

	<a href="/staffahli"> Kembali</a>

	<br/>
	<br/>

	@foreach($staffahli as $sa)
	<form action="/updatestaffahli" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $sa->staffAhliID }}"> <br/>
		namaDepan <input type="text" required="required" name="namaDepan" value="{{ $sa->namaDepan }}"> <br/>
		namaBelakang <input type="text" required="required" name="namaBelakang" value="{{ $sa->namaBelakang }}"> <br/>
        asalDepartemen <input type="text" required="required" name="asalDepartemen" value="{{ $sa->asalDepartemen }}"> <br/>
        kodeDivisi <input type="text" required="required" name="kodeDivisi" value="{{ $sa->kodeDivisi }}"> <br/>
        NRP <input type="text" required="required" name="NRP" value="{{ $sa->NRP }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
