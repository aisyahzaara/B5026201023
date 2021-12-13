@extends('layout.ceria')
@section('title', 'Data Pegawai')

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

	<h2>View Pegawai</h2>

	@foreach($pegawai as $p)

        <table>
            <tr>
                <td class="isi-tabel">Nama</td>
                <td class="isi-tabel"> {{ $p->pegawai_nama }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Jabatan</td>
                <td class="isi-tabel"> {{ $p->pegawai_jabatan }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Umur</td>
                <td class="isi-tabel"> {{ $p->pegawai_umur }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Alamat</td>
                <td class="isi-tabel"> {{ $p->pegawai_alamat }} </td>
            </tr>
        </table>

        <div class="row mb-3" style="margin-top: 1rem; margin-bottom:1rem">
            <div class="col-sm-6">
                    <button type="reset" id="reset" value="reset" class="btn btn-warning">
                      <a href="/pegawai"> Kembali</a>
                    </button>
            </div>
        </div>

	@endforeach

@endsection
