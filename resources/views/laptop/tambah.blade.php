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
@section('title', 'Data Laptop')
@section('isikonten')

	<h2>Data Pegawai</h2>

	<form class="form form-horizontal" action="/laptop/store" method="post">
		{{ csrf_field() }}
        <div class="form-body">
            <div class="row">

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Merk Laptop</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" name="Merk" required="required">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Stock Laptop</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" name="Stock" required="required">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Tersedia</label>
                </div>
                 <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="radio" id="ada" name="Tersedia" value="A">
                    <label for="hadir">Ada</label><br>
                    <input type="radio" id="tidak" name="Tersedia" value="T" checked="checked">
                    <label for="tidak">Tidak ada</label><br>
                </div>
            </div>

            <div class="row mb-3" style="margin-top: 1rem; margin-bottom:1rem">
              <div class="col-sm-6">
                      <button type="reset" id="reset" value="reset" class="btn btn-warning">
                        <a href="/laptop"> Kembali</a>
                      </button>
              </div>
              <div class="col-sm-6">
                <button type="submit" id="submit" value="Simpan Data" class="btn btn-primary">Kirim</button>
            </div>
            </div>

    </div>
        </form>
@endsection
