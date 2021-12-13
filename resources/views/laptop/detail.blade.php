@extends('layout.ceria')
@section('title', 'Data Laptop')

<style>
   .isi-tabel{
       padding: 10px;
   }
    h2 {
        font-family: 'Droid serif', serif;
        font-size: 36px; font-weight: 400;
        line-height: 44px;
    }
    </style>
@section('isikonten')

	<h2>View Laptop</h2>

	@foreach($laptop as $p)

        <table>
            <tr>
                <td class="isi-tabel">Kode Laptop</td>
                <td class="isi-tabel"> {{ $p->kodelaptop }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Merk Laptop</td>
                <td class="isi-tabel"> {{ $p->merklaptop }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Stock Laptop</td>
                <td class="isi-tabel"> {{ $p->stocklaptop }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Tersedia</td>
                <td class="isi-tabel"> {{ $p->tersedia }} </td>
            </tr>
        </table>

        <div class="row mb-3" style="margin-top: 1rem; margin-bottom:1rem">
            <div class="col-sm-6">
                    <button type="reset" id="reset" value="reset" class="btn btn-warning">
                      <a href="/laptop"> Kembali</a>
                    </button>
            </div>
        </div>

	@endforeach

@endsection
