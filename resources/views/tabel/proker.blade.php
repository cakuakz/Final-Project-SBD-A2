@extends('layouts.layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<h3>Data proker</h3>

	<a href="/tambahproker"> + Tambah proker Baru</a>
    <a href="/home/dashboard" style="margin-left: 5em">Kembali</a>

	<br/>
	<br/>

	<input id="input" type="text" placeholder="Search.." class="form-control">
	<table class="table table-bordered table-dark" id="table">
    <thead>
		<tr>
            <th class="col-1">prokerID</th>
			<th class="col-1">namaProker</th>
			<th class="col-1">kodeDivisi</th>
			<th class="col-1">tempatProker</th>
            <th class="col-2">tanggalProker</th>
            <th class="col-2">statusProker</th>
			<th class="col-2">opsi</th>
		</tr>
    </thead>
		@foreach($Proker as $p)
    <tbody>
		<tr>
            <td>{{ $p->prokerID }}</td>
			<td>{{ $p->namaProker }}</td>
			<td>{{ $p->kodeDivisi }}</td>
			<td>{{ $p->tempatProker }}</td>
            <td>{{ $p->tanggalProker }}</td>
            <td>
                <select class="custom-select" name="status">
                    @foreach ($statusProker as $s)
                         <option value="{{ $s->id }}">{{ $s->status }}</option>
                    @endforeach
            </td>
            <td>
				<a href="/editproker/{{ $p->prokerID }}">Edit</a>
				|
				<a href="/hapusproker/{{ $p->prokerID }}">Hapus</a>
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
