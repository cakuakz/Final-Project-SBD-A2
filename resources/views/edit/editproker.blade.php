@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit proker</h3>

	<a href="/proker"> Kembali</a>

	<br/>
	<br/>

    @foreach ($Proker as $p)
    <form action="/updateproker" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="prokerID" value="{{ $p->prokerID }}"> <br/>
		namaProker <input type="text" required="required" name="namaProker" value="{{ $p->namaProker }}"> <br/>
		kodeDivisi <input type="text" required="required" name="kodeDivisi" value="{{ $p->kodeDivisi }}"> <br/>
        tempatProker <input type="text" required="required" name="tempatProker" value="{{ $p->tempatProker }}"> <br/>
        tanggalProker <input type="date" required="required" name="tanggalProker" value="{{ $p->tanggalProker }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endforeach



</body>
</html>
