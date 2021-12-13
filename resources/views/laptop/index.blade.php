@extends('layout.ceria')
@section('title', ' Data Laptop')
<style>
    #laptop {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 80%;
      text-align: center;
    }
    #laptop td, #laptop th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #laptop tr:nth-child(even){background-color: #f2f2f2;}

    #laptop tr:hover {background-color: #ddd;}

    #laptop th {
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
    margin-top: 1rem;
    }
    h4{
        text-align: center;
    }
    .tambahLaptop{
    margin-top: 1rem;
    margin-bottom: 1rem;
    }
    .tambahLaptop a{
        color: rgb(0, 0, 0);
    }
    </style>
@section('isikonten')

	<h2> PT Sunny Optical Technology Group</h2>

    <div>
        <form action="/laptop/cari" method="GET" style="width: 60%; margin-top: 1rem">
            <input type="text" class="form-control" name="cari" placeholder="Cari Laptop . . ." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary" value="Cari" style="margin-top: 1rem">
        </form>
    </div>

    <div class="keterangan">
    <h4>Keterengan persediaan</h4>
    <p>A = Ada<br>
        T = Tidak Ada<br>
    </p>
    </div>

    <div class="tambahLaptop">
    <button type="button" class="btn btn-info">
        <a href="/laptop/tambah"> + Tambah Laptop Baru</a>
    </button>
    </div>

	<table id="laptop" style="border: 1">
		<tr>
			<th>Merk Laptop</th>
            <th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($laptop as $p)
		<tr>
			<td>{{ $p->merklaptop }}</td>
            <td>{{ $p->tersedia }}</td>
			<td>
                <a href="/laptop/view/{{ $p->kodelaptop }}">
                    <button type="button" class="btn btn-primary">View Detail</button>
                </a>
				<a href="/laptop/edit/{{ $p->kodelaptop }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>

				<a href="/laptop/hapus/{{ $p->kodelaptop }}">
                    <button type="button" class="btn btn-danger">Hapus</button>
                </a>
			</td>
		</tr>
		@endforeach
	</table>
    <div style="margin-top: 2rem">
        {{ $laptop->links() }}
    </div>
@endsection
