@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<h3>Data staff</h3>

	<a href="/tambahstaff"> + Tambah staff Baru</a>
    <a href="/home/dashboard" style="margin-left: 5em">Kembali</a>

	<br/>
	<br/>

	<input id="input" type="text" placeholder="Search.." class="form-control">
	<table class="table table-bordered table-dark" id="table">
    <thead>
		<tr>
			<th>staffID</th>
			<th>namaDepan</th>
			<th>namaBelakang</th>
			<th>asalDepartemen</th>
            <th>kodeDivisi</th>
            <th>NRP</th>
			<th>opsi</th>
		</tr>
    </thead>
		@foreach($Staff as $s)
    <tbody>
		<tr>
			<td>{{ $s->staffID }}</td>
			<td>{{ $s->namaDepan }}</td>
			<td>{{ $s->namaBelakang }}</td>
            <td>{{ $s->asalDepartemen }}</td>
            <td>{{ $s->kodeDivisi }}</td>
            <td>{{ $s->NRP }}</td>
			<td>
				<a href="/editstaff/{{ $s->staffID }}">Edit</a>
				|
				<a href="/hapusstaff/{{ $s->staffID }}">Hapus</a>
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
