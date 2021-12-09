@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<h3>Data anggota</h3>

	<a href="/tambahanggota"> + Tambah anggota Baru</a>
    <a href="/home/dashboard" style="margin-left: 5em">Kembali</a>

	<br/>
	<br/>

	<input id="input" type="text" placeholder="Search.." class="form-control">
	<table class="table table-bordered table-dark" id="table">
    <thead>
		<tr>
            <th>noAnggota</th>
			<th>namaDepan</th>
			<th>namaBelakang</th>
			<th>NRP</th>
			<th>asalDepartemen</th>
            <th>namaProker</th>
			<th>opsi</th>
		</tr>
    </thead>
		@foreach($Anggota as $a)
    <tbody>
		<tr>
            <td>{{ $a->noAnggota }}</td>
			<td>{{ $a->namaDepan }}</td>
			<td>{{ $a->namaBelakang }}</td>
			<td>{{ $a->NRP }}</td>
			<td>{{ $a->asalDepartemen }}</td>
            <td>{{ $a->namaProker }}</td>
			<td>
				<a href="/editanggota/{{ $a->noAnggota }}">Edit</a>
				|
				<a href="/hapusanggota/{{ $a->noAnggota }}">Hapus</a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>

    <script>
        $(document).ready(function () {
            $("#input").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#table tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</body>
</html>
