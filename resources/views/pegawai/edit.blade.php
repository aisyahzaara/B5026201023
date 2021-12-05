@extends('layout.ceria')

<style>
    .form {
        background-color: #fff;
        width: 85%;
        padding: 10px;
        margin-top: 2rem;
        box-shadow: 0 2px 20px rgb(177, 187, 245);
    }
    h2 {
        font-family: 'Droid serif', serif;
        font-size: 36px; font-weight: 400;
        line-height: 44px;
    }
    </style>
@section('title', 'Data Pegawai')
@section('isikonten')


	<h2>Edit Pegawai</h2>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form form-horizontal">
		{{ csrf_field() }}
        <div class="form-body">

            <div class="row">
                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    <label>Nama</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" required="required" name="Nama" value="{{ $p->pegawai_nama }}">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Jabatan</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" required="required" name="Jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Umur</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="number" required="required" name="Umur" value="{{ $p->pegawai_umur }}">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Alamat</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <textarea required="required" name="Alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
                </div>
            </div>

            <div class="row mb-3" style="margin-top: 1rem; margin-bottom:1rem">
              <div class="col-sm-6">
                      <button type="reset" id="reset" value="reset" class="btn btn-warning">
                        <a href="/pegawai"> Kembali</a>
                      </button>
              </div>
              <div class="col-sm-6">
                <button type="submit" id="submit" value="Simpan Data" class="btn btn-primary">Kirim</button>
            </div>
	</form>
	@endforeach

@endsection
