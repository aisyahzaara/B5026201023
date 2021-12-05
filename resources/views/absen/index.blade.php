@extends('layout.ceria')
@section('title', 'Absen Pegawai')
<style>
    #absen {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 80%;
      text-align: center;
    }
    #absen td, #absen th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #absen tr:nth-child(even){background-color: #f2f2f2;}

    #absen tr:hover {background-color: #ddd;}

    #absen th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #949cdb;
      color: white;
    }
    h2{
     font-family: 'Droid serif', serif;
     font-size: 36px; font-weight: 400;
     line-height: 44px;
    }
    h4 {
        font-family: serif;
    }
    .keterangan p {
        font-family: 'optima', sans-serif;
        margin-top: 1rem;
        margin-left: 0.5rem;
    }
    .keterangan{
    background-color: rgb(186, 207, 247);
    width: 300px;
    border: 15px solid rgb(72, 84, 192);
    padding: 10px;
    margin-top: 2rem;
    }
    h4{
        text-align: center;
    }
    .tambahAbsen{
    margin-top: 1rem;
    margin-bottom: 1rem;
    }
    .tambahAbsen a{
        color: rgb(0, 0, 0);
    }
    </style>
@section('isikonten')

	<h2>Absen Pegawai Sunny Optical Technology Group</h2>
    <div class="keterangan">
    <h4>Keterengan absen</h4>
    <p>H = Hadir<br>
        T= Tidak Hadir<br>
    </p>
    </div>

    <div class="tambahAbsen">
    <button type="button" class="btn btn-info">
        <a href="/absen/tambah"> + Tambah Absen Baru</a>
    </button>
    </div>

	<table id="absen" style="border: 1">
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
				<a href="/absen/edit/{{ $p->ID }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>

				<a href="/absen/hapus/{{ $p->ID }}">
                    <button type="button" class="btn btn-danger">Hapus</button>
                </a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
