<!DOCTYPE html>
<html>
<head>
	<title> Data Absen Pegawai</title>
</head>
<body>

	<h2>Absen Pegawai Sunny Optical Technology Group</h2>
    <h3>Keterengan absen</h3>
    <p>H = Hadir<br>
        A = Alfa<br>
        I = Izin<br>
        S = Sakit<br>
    </p>
	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
