@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit staff</h3>

	<a href="/staff"> Kembali</a>

	<br/>
	<br/>

	@foreach($Staff as $s)
	<form action="/updatestaff" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->staffID }}"> <br/>
		namaDepan <input type="text" required="required" name="namaDepan" value="{{ $s->namaDepan }}"> <br/>
		namaBelakang <input type="text" required="required" name="namaBelakang" value="{{ $s->namaBelakang }}"> <br/>
        asalDepartemen <input type="text" required="required" name="asalDepartemen" value="{{ $s->asalDepartemen }}"> <br/>
        kodeDivisi <input type="text" required="required" name="kodeDivisi" value="{{ $s->kodeDivisi }}"> <br/>
        NRP <input type="text" required="required" name="NRP" value="{{ $s->NRP }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
