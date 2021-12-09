@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>


	<h3>Data staffahli</h3>

	<a href="/tambahstaffahli"> + Tambah staffahli Baru</a>
    <a href="/home/dashboard" style="margin-left: 5em">Kembali</a>

	<br/>
	<br/>

	<input id="input" type="text" placeholder="Search.." class="form-control">
	<table class="table table-bordered table-dark" id="table">
    <thead>
		<tr>
			<th>StaffAhliID</th>
			<th>NamaDepan</th>
			<th>NamaBelakang</th>
			<th>AsalDepartemen</th>
            <th>KodeDivisi</th>
            <th>NRP</th>
			<th>Opsi</th>
		</tr>
    </thead>
		@foreach($staffahli as $sa)
    <tbody>
		<tr>
			<td>{{ $sa->staffAhliID }}</td>
			<td>{{ $sa->namaDepan }}</td>
			<td>{{ $sa->namaBelakang }}</td>
            <td>{{ $sa->asalDepartemen }}</td>
            <td>{{ $sa->kodeDivisi }}</td>
            <td>{{ $sa->NRP }}</td>
			<td>
				<a href="/editstaffahli/{{ $sa->staffAhliID }}">Edit</a>
				|
				<a href="/hapusstaffahli/{{ $sa->staffAhliID }}">Hapus</a>
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
