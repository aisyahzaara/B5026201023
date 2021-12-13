@extends('layout.ceria')
@section('title', 'Data Laptop')

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
@section('isikonten')

	<h2>Edit Data Laptop</h2>

	@foreach($laptop as $p)
	<form action="/laptop/update" method="post" class="form form-horizontal">
		{{ csrf_field() }}
        <div class="form-body">

            <div class="row">
                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="hidden" name="id" value="{{ $p->kodelaptop }}">
                    <label>Merk Laptop</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" required="required" name="Merk" value="{{ $p->merklaptop }}">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>STock Laptop</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" required="required" name="Stock" value="{{ $p->stocklaptop }}">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Tersedia</label>
                </div>
                 <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                <input type="radio" id="ada" name="Tersedia" value="H" @if ($p->tersedia === "A") checked="checked" @endif>
                <label for="hadir">Ada</label>
                <input type="radio" id="tidak" name="Tersedia" value="T" @if ($p->tersedia === "T") checked="checked" @endif>
                <label for="tidak">Tidak ada</label>
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
	</form>
	@endforeach

@endsection
