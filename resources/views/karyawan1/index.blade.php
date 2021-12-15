@extends('layout.ceria')
@section('title', 'Data Karyawan')
<style>
    #karyawan1 {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 80%;
      text-align: center;
    }
    #karyawan1 td, #karyawan th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #karyawan1 tr:nth-child(even){background-color: #f2f2f2;}

    #karyawan1 tr:hover {background-color: #ddd;}

    #karyawan1 th {
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
    .tambahKaryawan1{
    margin-top: 1rem;
    margin-bottom: 1rem;
    }
    .tambahKaryawan1 a{
        color: rgb(0, 0, 0);
    }
    </style>
@section('isikonten')

	<h2>Data Karyawan Sunny Optical Technology Group</h2>


    <div class="tambahKaryawan1">
    <button type="button" class="btn btn-info">
        <a href="/karyawan1/tambah"> + Tambah Data Karyawan</a>
    </button>
    </div>

	<table id="karyawan1" style="border: 1">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
            <th>Gaji</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $p)
		<tr>
			<td>{{ $p->NIP }}</td>
			<td>{{ $p->Nama }}</td>
			<td>{{ $p->Pangkat }}</td>
            <td>{{ $p->Gaji }}</td>
			<td>
				<a href="/karyawan1/hapus/{{ $p->NIP }}">
                    <button type="button" class="btn btn-danger">Hapus</button>
                </a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
