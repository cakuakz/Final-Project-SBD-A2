@extends('layouts.layout')
<html>
<head>
	<title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<h3>Data Divisi</h3>

	<a href="/tambahdivisi"> + Tambah Divisi Baru</a>
    <a href="/home/dashboard" style="margin-left: 5em">Kembali</a>

	<br/>
	<br/>

    <input id="input" type="text" placeholder="Search.." class="form-control">
	<table class="table table-bordered table-dark" id="table">
    <thead>
		<tr>
			<th>kodeDivisi</th>
			<th>namaDivisi</th>
			<th>ketuaDivisi</th>
            <th>Opsi</th>
		</tr>
    </thead>
    @foreach($Divisi as $d)
    <tbody>
		<tr>
			<td>{{ $d->kodeDivisi }}</td>
            <td>{{ $d->namaDivisi }}</td>
			<td>{{ $d->ketuaDivisi }}</td>
			<td>
				<a href="/editdivisi/{{ $d->kodeDivisi}}">Edit</a>
				|
				<a href="/hapusdivisi/{{ $d->kodeDivisi }}">Hapus</a>
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
