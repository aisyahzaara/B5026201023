<!DOCTYPE html>
<html>
<head>
	<title>Absen Pegawai</title>
</head>
<body>

	<h3>Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal"> <br/>
		Status <input type="text" name="status" required="required" maxlength="1"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>