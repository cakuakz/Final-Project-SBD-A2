@extends('layouts.layout')
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit Divisi</h3>

	<a href="/divisi"> Kembali</a>

	<br/>
	<br/>

	@foreach($Divisi as $d)
	<form action="/updatedivisi" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $d->kodeDivisi }}"> <br/>
		namaDivisi <input type="text" required="required" name="namaDivisi" value="{{ $d->namaDivisi }}"> <br/>
		ketuaDivisi <input type="text" required="required" name="ketuaDivisi" value="{{ $d->ketuaDivisi }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
