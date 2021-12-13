@extends('layout.ceria')
@section('title', 'Daftar Pegawai')
<style>
    #pegawai {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 95%;
      text-align: center;
    }
    #pegawai td, #absen th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #pegawai tr:nth-child(even){background-color: #f2f2f2;}

    #pegawai tr:hover {background-color: #ddd;}


    #pegawai th {
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
    .tambahPegawai{
    margin-top: 1rem;
    margin-bottom: 1rem;
    }
    .tambahPegawai a{
        color: rgb(0, 0, 0);
    }
    </style>
@section('isikonten')

	<h2> Data Pegawai Sunny Optical Technology Group</h2>

    <div>
        <form action="/pegawai/cari" method="GET" style="width: 60%">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai . . ." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary" value="Cari" style="margin-top: 1rem">
        </form>
    </div>

    <div class="tambahPegawai">
        <button type="button" class="btn btn-info">
            <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        </button>
    </div>

	<table id="pegawai" style="border: 1">
		<tr>
			<th>Nama</th>
            <?php /*
			<th>Jabatan</th>
			<th style="width: 70px"> Umur</th>
            */?>
			<th> Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
            <?php /*
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
            */?>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">
                    <button type="button" class="btn btn-primary">View Detail</button>
                </a>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">
                    <button type="button" class="btn btn-danger">Hapus</button>
                </a>
			</td>
		</tr>
		@endforeach
	</table>

    <div style="margin-top: 2rem">
    {{ $pegawai->links() }}
    </div>

    @endsection
